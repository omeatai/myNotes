from django.shortcuts import render
from django.views.generic import ListView
from .models import Todo


class TodoListView(ListView):
    model = Todo
    template_name = 'todo_list.html'
