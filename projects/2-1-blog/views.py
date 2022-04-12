from django.shortcuts import render
from django.http import HttpResponse
from .models import Post

message = '''WeBlog is an online journal and informational website where 
        writers share their views on various individual subjects. Read our varied 
        acticles ranging from Politics to Religion, Sports, Entertainments, and 
        lots more! You can also register to become a writer and share your own 
        views.'''

def home(request):
    return render(request, 'blog/home.html', {
        'posts': Post.objects.all(),
        'page': 'home',
        'topic': 'Welcome to WeBlog!',
        'message': message
    })

def about(request):
    return render(request, 'blog/about.html', {
        'page': 'about',
        'topic': 'Know more about WeBlog...',
        'message': message
    })

