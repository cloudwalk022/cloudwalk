<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ChatbotController extends Controller
{
    public function getResponse(Request $request)
    {
        // Validate the request
        $request->validate([
            'message' => 'required|string'
        ]);

        $userMessage = $request->input('message');

        // Call the AI API
        $aiResponse = $this->getAIResponse($userMessage);

        // Return the AI response
        return response()->json(['response' => $aiResponse]);
    }

    private function getAIResponse($message)
    {
        $client = new Client();
        $apiKey = env('OPENAI_API_KEY'); // Store your API key in the .env file for security

        try {
            $response = $client->post('https://api.openai.com/v1/completions', [
                'headers' => [
                    'Authorization' => "Bearer {$apiKey}",
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'model' => 'text-davinci-003',
                    'prompt' => $message,
                    'max_tokens' => 150,
                ],
            ]);

            $data = json_decode($response->getBody(), true);
            return trim($data['choices'][0]['text']);

        } catch (\Exception $e) {
            return "Sorry, there was an error processing your request.";
        }
    }
}
