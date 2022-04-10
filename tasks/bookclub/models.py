from django.db import models
from django.utils import timezone

class Comment(models.Model):
    name = models.CharField(max_length=200, default=None)
    title = models.CharField(max_length=200, default=None)
    comment = models.TextField(default=None)
    date_added = models.DateTimeField(default=timezone.now)
    
    def __str__(self):
        return f'<Name: {self.name}, ID: {self.id}>'
