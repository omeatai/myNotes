from django.shortcuts import render
from .models import Movie
from django.http import HttpResponse, JsonResponse

def movie_list(request):
    if request.method == 'GET':
        movies = Movie.objects.all()
        data = {
            "Movies": list(movies.values())
        }
        return JsonResponse(data)

def movie_detail(request, pk):
    if request.method == 'GET':
        movie = Movie.objects.get(pk=pk)
        data = {
            "name": movie.name, 
            "description": movie.description, 
            "isActive": movie.active
        }
        return JsonResponse(data)