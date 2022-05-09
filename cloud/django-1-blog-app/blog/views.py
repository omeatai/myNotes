from django.shortcuts import render
from django.views import generic
from django.views.generic import ListView, DetailView 
from django.views.generic.edit import (CreateView, UpdateView,  DeleteView)
from django.urls import reverse_lazy
from .models import Post
from django.contrib.auth.forms import UserCreationForm 


class BlogListView(ListView): 
    model = Post
    template_name = 'blog/home.html'
    # context_object_name = 'all_posts_list'
    
class BlogDetailView(DetailView):
    model = Post
    template_name = 'blog/post_detail.html'
    # context_object_name = 'indiv_post'
    
class BlogCreateView(CreateView):
    model = Post
    template_name = 'blog/post_new.html'
    fields = '__all__'    
    
class BlogUpdateView(UpdateView):
    model = Post
    template_name = 'blog/post_edit.html'
    fields = ['title', 'body']    

class BlogDeleteView(DeleteView):
    model = Post
    template_name = 'blog/post_delete.html'
    success_url = reverse_lazy('home')    
    
class SignUpView(generic.CreateView): 
    form_class = UserCreationForm 
    template_name = 'registration/signup.html' 
    success_url = reverse_lazy('login')    