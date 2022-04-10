from django import forms

class CommentForm(forms.Form):
    name = forms.CharField(max_length=200,
        widget=forms.TextInput(attrs={'class': 'form-control','placeholder': 'Full Name...', 'style': 'max-width: 600px', 'id': 'name'}))
    title = forms.CharField(max_length=200, 
        widget=forms.TextInput(attrs={'class': 'form-control', 'placeholder': 'Title...', 'style': 'max-width: 600px', 'id': 'title'}))
    comment = forms.CharField(widget=forms.Textarea(attrs={'class': 'form-control', 'placeholder': 'Write your comments here...', 'id': 'comment', 'style': 'max-width: 600px'}))