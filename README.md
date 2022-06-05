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