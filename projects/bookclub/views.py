from django.shortcuts import render, redirect
from .models import Comment
from .forms import CommentForm

def home(request):
    comments = Comment.objects.order_by('-date_added')
    return render(request, 'bookclub/home.html', {
        "comments" : comments,
    })

def comment(request):
    if request.method == 'POST':
        form = CommentForm(request.POST)
        data = request.POST
        
        if form.is_valid():
            instance = Comment(name=data['name'],title=data['title'],comment=data['comment'])
            instance.save()
            return redirect('home')
    else:
        form = CommentForm()
        return render(request, 'bookclub/comment.html', {
            "form" : form,
        })


def register(request):
    return render(request, 'bookclub/register.html', {})

def login(request):
    return render(request, 'bookclub/login.html', {})

def logout(request):
    return render(request, 'bookclub/logout.html', {})