from django.shortcuts import render
from .models import Article

def year_archive(request, year):
    article_list = Article.objects.filter(pub_date__year=year)
    return render(request, 'fundamentals/year_archive.html', {
        'year': year, 
        'article_list': article_list,
    })
    
def month_archive(request, year): 
    pass

def article_detail(request, year): 
    pass   