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