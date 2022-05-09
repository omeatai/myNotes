from django.shortcuts import render
# from django.http import HttpResponse


def index(request):
    
    meetups = [
        {
            'title': 'Welcome to Camp', 
            'location': 'Ibadan', 
            'slug': 'welcome-to-camp'
        },
        {
            'title': 'Home group', 
            'location': 'Lagos', 
            'slug': 'home-group'
        },
        {
            'title': 'Compete With Team', 
            'location': 'Abuja', 
            'slug': 'compete-with-team'
        }
    ]
    
    return render(request,'meetups/index.html',{
        # 'request': {
        #         'method':request.method,
        #         'path': request.path,
        # },
        "meetups": meetups,
        "show": True,
    })
