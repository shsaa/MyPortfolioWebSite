<template>
    <div>
        {{ Newmessage }}
        <label for="MyInput"></label>
        <br/>
        <input type="text" id="MyInput" v-model="message">
        <!--<button v-on:click="handelit">hi</button>-->
        <ul>
            <li :class="task.completed ? 'completed' : ''" v-for="task in tasks" v-on:click="changeline(task)" style="cursor: pointer">{{task.body}}</li>
        </ul>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                message: 'hello',
                tasks: [
                    {body: 'hey', completed: true},
                    {body: 'hi', completed: true},
                    {body: 'hello', completed: false}
                ]
            }
        },
        computed: {
            /**
             * @return {string}
             */
            Newmessage: function () {
                return this.message + ' extra';
            }
        },
        methods: {
            changeline: function (task) {
                task.completed = !task.completed;
            }
        }
    }

</script>

<style scoped>

</style>
