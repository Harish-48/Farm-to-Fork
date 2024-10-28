from flask import Flask, request, jsonify, render_template
from flask_cors import CORS  # Import flask-cors
import google.generativeai as genai
import os

# Initialize Flask app
app = Flask(__name__)
CORS(app)  # Enable CORS for the entire app

# Configure Gemini AI with the API key
genai.configure(api_key=os.environ["GEMINI_API_KEY"])

# Create the model
generation_config = {
    "temperature": 1,
    "top_p": 0.95,
    "top_k": 64,
    "max_output_tokens": 8192,
    "response_mime_type": "text/plain",
}

model = genai.GenerativeModel(
    model_name="gemini-1.5-flash",
    generation_config=generation_config,
)

# Serve the chatbot.html when user accesses the '/' route
@app.route('/')
@app.route('/chat')
def chat():
    return render_template('chatbot.html')

@app.route('/chatbot', methods=['POST'])
def chatbot():
    # Get user input from the request
    user_input = request.json.get("message")

    # Start the chat session if not already done
    chat_session = model.start_chat(
        history=[
            {
                "role": "user",
                "parts": [
                    "think that your are the chatbot in my website. My website i about it's connecting the both farmer and the restaurant owner without the middle. ",
        "now your role is if user ask you some  question related to our topic \nmeans you need to  answer for that\nGive the user short answers instead of long ones. The answers you give should be concise and to the point. It should be  within 1-2 lines.\n",
                ],
            },
            {
                "role": "model",
                "parts": [
                    "Okay, I'm ready to answer questions about connecting farmers and restaurants directly. Ask away!  I'll keep my responses short and to the point. \n",
                ],
            },
        ]
    )

    # Get the response from the chatbot
    response = chat_session.send_message(user_input)
    
    return jsonify({"reply": response.text})

if __name__ == '__main__':
    app.run(debug=True)
