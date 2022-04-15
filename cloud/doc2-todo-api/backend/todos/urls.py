from django.urls import path
from .views import TodoListView
from .views import ListTodo, DetailTodo

urlpatterns = [
    path('', TodoListView.as_view(), name='todo_list'),
    path('api/', ListTodo.as_view()),
    path('api/<int:pk>/', DetailTodo.as_view()),
]