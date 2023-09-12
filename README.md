:dart: Objective
<br>
Create and host an endpoint using any programming language of your choice.
<br>
The endpoint should take two GET request query parameters and return specific information in JSON format.<br>
:spiral_note_pad: Requirements
<br>
The information required includes:
<br>
Slack name<br>
Current day of the week<br>
Current UTC time (with validation of +/-2)<br>
Track<br>
The GitHub URL of the file being run<br>
The GitHub URL of the full source code.<br>
A  Status Code of Success<br>
<br>
JSON<br>
{<br>
  "slack_name": "example_name",<br>
  "current_day": "Monday",<br>
  "utc_time": "2023-08-21T15:04:05Z",<br>
  "track": "backend",<br>
  "github_file_url": "https://github.com/username/repo/blob/main/file_name.ext",<br>
  "github_repo_url": "https://github.com/username/repo",<br>
  "status_code": 200<br>
}<br>
<br>
Acceptance Criteria<br>
Endpoint Creation: Provide a publicly accessible endpoint.<br>
GET Parameters: The endpoint should accept two GET request query parameters: slack_name and track.<br>
       E.g.: http://example.com/api?slack_name=example_name&track=backend.<br>
Slack Name: The response should include the slack_name passed as a GET request query parameter.<br>
Current Day of the Week: Display the current day of the week in full (e.g., Monday, Tuesday, etc.).<br>
Current UTC Time: Return the current UTC time, accurate within a +/-2 minute window.<br>
Track: The response should display the track of the you signed up for (Backend). This will be based on the track GET parameter passed to the endpoint.<br>
GitHub File URL: Include a direct link to the specific file in the GitHub repository that's being executed.<br>
GitHub Repo URL: Include a link to the main page of the GitHub repository containing the project's entire source code.<br>
Status Code: Return 200 as Integer.<br>
JSON Format: The endpoint's response should adhere to the specified JSON format.<br>
Testing: Before submission:<br>
Ensure the endpoint is accessible.<br>
Check the returned JSON against the defined format.<br>
Validate the correctness of each data point in the JSON response.<br>
Submission Mode<br>
Please follow these submission guidelines<br>
Get into your DM<br>
Type /grade <your-api-endpoint-url-with-the-query-parameters><br>
E.g: /grade http://example.com/api?slack_name=example_name&track=backend<br>
Check your result<br>
                                                               <center> Very Important.....</center><br>
 Finaly, please use the provided Google Form. Within the form, share the URL of your hosted endpoint, along with the GitHub repository link of the file being run, and where the full source code can be found.<br>
:warning: Before submitting, do a final checkwith the grader bot to ensure that your endpoint is operational and meets the specified requirements. Incomplete or non-functional submissions may affect your evaluation.<br>
