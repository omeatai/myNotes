from django.db import models
from datetime import datetime, date

class Reporter(models.Model):
    full_name = models.CharField(max_length=100)
    
    def __str__(self):
        return self.full_name
    
class Article(models.Model):
    pub_date = models.DateField()    
    headline = models.CharField(max_length=200)
    content = models.TextField()
    reporter = models.ForeignKey(Reporter, on_delete=models.CASCADE)

    def __str__(self):
        return self.headline

class Blog(models.Model):
    name = models.CharField(max_length=100)
    tagline = models.TextField()  
    
    def __str__(self):
        return self.name

class Author(models.Model):
    name = models.CharField(max_length=200)
    email = models.EmailField()
    
    def __str__(self):
        return self.name
    
class Entry(models.Model):
    blog = models.ForeignKey(Blog, on_delete=models.CASCADE)
    headline = models.CharField(max_length=200)
    body_text = models.TextField() 
    pub_date = models.DateField()
    mod_date = models.DateField(default=date.today)
    authors = models.ManyToManyField(Author)
    number_of_comments = models.IntegerField(default=0)
    number_of_pingbacks = models.IntegerField(default=0)
    rating = models.IntegerField(default=5)   

    def __str__(self):
        return self.headline
