
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app',
    data: {
        newTodoText: '',
        todos: []
    },
    methods: {
        addNewTodo: function () {
            // Add the new to-do item to todos
            this.todos.push(this.newTodoText);
            // Clear out text in input box
            this.newTodoText = '';
        },
        removeTodo: function (index) {
            // Remove item from todos array
            this.todos.splice(index, 1);
        }
    }
});
