from django.shortcuts import render
from django.views.generic import ListView, DetailView
from rest_framework.generics import (ListAPIView, RetrieveAPIView)
from .serializers import TodoSerializer
from .models import Todo


class TodoListView(ListView):
    model = Todo
    template_name = 'todo_list.html'


class ListTodo(ListAPIView): 
    queryset = Todo.objects.all() 
    serializer_class = TodoSerializer
    
class DetailTodo(RetrieveAPIView): 
    queryset = Todo.objects.all() 
    serializer_class = TodoSerializer
    
    