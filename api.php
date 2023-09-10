<?php

$slackName = $_GET['slack_name'] ?? '';
$track = $_GET['track'] ?? '';

// Get current day of the week
$currentDay = date('l');

// Get current UTC time with validation of +/-2 minutes
$utcTime = new DateTime('now', new DateTimeZone('UTC'));
$currentTime = new DateTime('now');
$timeWindow = $currentTime->diff($utcTime)->format('%i');
if ($timeWindow > 2) {
    http_response_code(400);
    echo json_encode(['error' => 'Invalid UTC time']);
    exit;
}

// GitHub URLs
$githubFileUrl = 'https://github.com/Jacktone-wambui/HNGx-Backend/blob/main/api.php';
$githubRepoUrl = 'https://github.com/Jacktone-wambui/HNGx-Backend';


// Response JSON
$response = [
    'slack_name' => $slackName,
    'current_day' => $currentDay,
    'utc_time' => $utcTime->format('Y-m-d\TH:i:s\Z'),
    'track' => $track,
    'github_file_url' => $githubFileUrl,
    'github_repo_url' => $githubRepoUrl,
    'status_code' => 200,
];

header('Content-Type: application/json');
echo json_encode($response);
