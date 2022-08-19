# myNotes
myNotes


What does this PR do
This branch is responsible for the Collection Officer to accept and confirm the received item for recycling. The api accepts the status to be changed by the Collection officer, and also ensures that permissions apply for the Collection Officer to be authorised to view the endpoint.

List of task completed
 Cleaned up the tests file
 Improved on views logic
 Included more tests
 Wrote permissions logic to allow only collectors
 Validate logged-in user as Collection Officer
 Enable the Collection Officer to change the status of the Order
 Written tests for the User auth and change of status 
Specify what's left to be done
None

What are the relevant Jira stories
As a collection officer i want to be able to confirm received item

How can this be tested
docker-compose exec api python project/manage.py test project/tests

Expected Results
Test for AcceptItem Class View is resolved.
self.assertEqual(resolve(url).func.view_class, AcceptItem)
Status code equals 200 (OK) for user (GET request) is Collector and is authenticated.
self.assertEqual(response.status_code, status.HTTP_200_OK)
Status code equals 401 (UNAUTHORIZED) for user (GET request) is Collector and is NOT authenticated.
self.assertEqual(response.status_code, status.HTTP_401_UNAUTHORIZED)
Status code equals 403 (FORBIDDEN) for user (GET request) is Individual(Customer) and is authenticated.
self.assertEqual(response.status_code, status.HTTP_403_FORBIDDEN)
Status code equals 200 (OK) for user (PUT request) is Collector and is authenticated.
self.assertEqual(response.status_code, status.HTTP_200_OK)
Status code equals 403 (FORBIDDEN) for user (PUT request) is Individual(Customer) and is authenticated.
self.assertEqual(response.status_code, status.HTTP_403_FORBIDDEN)
Additional info
All views and Tests completed

Before submitting this PR, please make sure
 Your code builds clean without any errors or warnings
 You have tested your code with postman or browser as necessary
 You have added unit tests and all tests are passing
 This PR template is completed.


### What does this PR do
This branch is responsible for the completion of the SignIn and SignUp pages.

### Tasks Completed
[x]-Completed the creation of the SignUp and SignIn Pages.
[x]-Refactored code to resolve any conflicts.
[x]-Passed all tests.

### Illustration
1. SIgnUp Page

![image](https://user-images.githubusercontent.com/32337103/173524933-fa28f902-5520-4925-90a2-024fa0b3f63a.png)

2. SignIn Page

![image](https://user-images.githubusercontent.com/32337103/173525041-de88d1c4-1007-4907-9906-8cf781e96463.png)

Before submitting this PR, please make sure
[x]-Your code builds clean without any errors or warnings
[x]-You have tested your code with postman or browser as necessary
[x]-You have added unit tests and all tests are passing
[x]-This PR template is completed.









### What does this PR do
This branch is responsible for the completion of the Feedback Implementation for the following:
- Mental Health
- Post Booking
- Post Order
- Nps 
- PostAppointment

### Tasks Completed
- [ ] Completed the creation of the Models.
- [ ] Completed the creation of the Serializers and API Logic for the Endpoints.
- [ ] Setup URL Endpoints for access to create Feedback. 
- [ ] Refactored code to resolve any conflicts or Issues.

### Endpoints

#### -----> For POST REQUESTS
Mental Health
```python
http://127.0.0.1:8000/feedback/api/mental-health/
```
Post Booking
```python
http://127.0.0.1:8000/feedback/api/post-booking/
```
Post Order
```python
http://127.0.0.1:8000/feedback/api/post-order/
```
Nps 
```python
http://127.0.0.1:8000/feedback/api/nps/
```
PostAppointment
```python
http://127.0.0.1:8000/feedback/api/post-appointment/
```

#### -----> For Endpoint Fields
Mental Health
```python
"""[Create a new Mental Health Feedback]
            :params:
                - user (inherited) (required)
                - subscription (inherited) (required)
                - session_rating (required) choice field - [1,2,3,4,5]
                - session_review (optional) TEXT
                - follow_up (optional) CHAR
                - no_follow_up_review (optional) TEXT
                - nps_rating (required) choice field - [1-10]
                - nps_review (optional) TEXT
            """
```
Post Booking
```python
"""[Create a new Post Booking Feedback]
            :params:
                - user (inherited) (required)
                - appointment  (inherited) (required)
                - booking_satisfaction (required)
                choice field - ["unsatisfied", "not so satisfied", "satisfied", "very satisfied"]
                - post_booking_review (optional) TEXT
            """
```
Post Order
```python
"""[Create a new Post Order Feedback.]
            :params:
                - user (inherited) (required)
                - order (inherited) (required)
                - post_order_rating (required) choice field - [1,2,3,4,5]
                - post_order_review (optional) TEXT
            """
```
Nps 
```python
"""[Create a new Nps Feedback.]
            :params:
                - user (inherited) (required)
                - nps_rating (required) choice field - [1-10]
                - nps_review (optional) TEXT
            """
```
PostAppointment
```python
"""[Create a new Post Appointment Feedback.]
            :params:
                - user (inherited) (required)
                - appointment  (inherited) (required)
                - doctor_rating (required) choice field - [1,2,3,4,5]
                - post_appointment_satisfaction (required)
                choice field - ["unsatisfied", "not so satisfied", "satisfied", "very satisfied"]
                - video_rating (required) choice field - [1,2,3,4,5]
                - audio_rating (required) choice field - [1,2,3,4,5]
                - audio_video_review (optional) TEXT
                -  post_appointment_review (optional) TEXT
            """
```

### Illustration/Screenshots
None

### Pledge
Before submitting this PR, I made sure:
- [ ] My code builds clean without any errors or warnings
- [ ] I followed the documentation as required
- [ ] I have tested my code with postman or browser as necessary
- [ ] I have added unit tests and all tests are passing
- [ ] This PR template is completed.

### Challenges
- I had a lot of system errors running the application on my end which delayed the development process. This may be due to my system venv environment or application not setup correctly. I will still need help with that.
- I still need to include more tests for the features, as tests were done offsite due to system environmental restrictions while deploying the application.
- I will need to understand more about how the login authentication is applied on the system so that I can avert that to mitigate restrictions.

### Conclusion
- More features need to be added.
- More tests need to be done.
- I suggest that a review be done and recommendations be included in the next sprint.









### What does this PR do
This branch is responsible for the completion of the Feedback Implementation for the following.

### Tasks Completed
- [x] Completed the creation of the Models.
- [x] Completed the creation of the Serializers and API Logic for the Endpoints.
- [x] Setup URL Endpoints for access to create Feedback. 
- [x] Refactored code to resolve any conflicts or Issues.

### Dependencies
None

### Illustration/Screenshots
None

### Pledge
Before submitting this PR, I made sure:
- [x] My code builds clean without any errors or warnings
- [x] I followed the documentation as required
- [x] I have tested my code with postman or browser as necessary
- [x] I have added required tests and all tests are passing
- [x] This PR template is completed.

### Challenges
None

### Conclusion
- I suggest that a review be done and recommendations be included in this review.
