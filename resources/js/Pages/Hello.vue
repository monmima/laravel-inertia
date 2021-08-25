<template>
    <div class="min-h-screen bg-blue-500"> <!-- view container -->

        <h1>hello page</h1>

        <hr>

        <ul>
            <li><Link title="Index page" href="/">Index page</Link></li>
            <li><Link title="Contact page" href="/contact">Contact page</Link></li>
            <!-- <li><Link title="Hello page, no data" href="/hello">Hello page, no data</Link></li> -->
            <li><Link title="Hello page, with data" href="/hello-database">Hello page with data</Link></li>
        </ul>

        <hr>

        <div class="flex ma-grille">

            <div>
                <div>

                    <!-- if no messages in database -->
                    <div v-if="messages.length === 0">
                        Nothing do display.
                    </div>

                    <!-- if no messages in database -->
                    <div v-else v-for="(message, index) in messages" v-bind:key="index" class="bg-white p-8 mb-4 rounded shadow">
                        {{ message.id }}
                        {{ message.message }}
                        <Link title="Delete this record" v-bind:href="`/${ message.id }/delete`">Delete</Link>

                        <!-- <form> -->
                            <!-- <button>delete</button> -->
                            <!-- <button @click="deleteRow(id)" class="btn btn-sm btn-danger">Del</button> -->
                        <!-- </form> -->

                    </div>

                </div>

                <div v-if="errors.message">
                    {{ errors.message }}
                </div>
            </div>

            <div>
                <h2 class="">Add a message</h2>

                <form @submit.prevent="submit">

                    <!-- form.message refers to the name of the column in the database -->
                    <textarea v-model="form.message" rows="8"></textarea>
                    <div>
                        <button type="submit">Add a message</button>
                    </div>

                </form>
            </div>

        </div>
    </div> <!-- end view container -->


</template>

<script>
    import { Link } from '@inertiajs/inertia-vue';

    export default {
        components: { Link },
        props: {
            messages: Array,
            errors: Object
        },
        data() {
            return {
                // refers to the name of the column in the database
                form: { message: "" }
            }
        },
        methods: {
            submit() {
                // sends data to the backend
                this.$inertia.post("/messages", this.form);
            }
        }

    };
</script>
