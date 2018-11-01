@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Laravel To-Do List</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div id="app" v-cloak>

                        <div class="input-group mb-3">
                            <input
                                v-on:keyup.enter="addNewTodo"
                                type="text"
                                placeholder="Add a to-do..."
                                v-model="newTodoText"
                            >
                        </div>

                        <p v-if="todos.length == 0">Nothing to do? Great! Have fun!</p>

                        <ul class="list-group">
                            <li class="list-group-item" v-for="(todo, index) in todos" v-on:click="removeTodo(index);">
                                <i class="far fa-trash-alt mr-3 text-danger"></i> @{{ todo }}
                            </li>
                        </ul>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
