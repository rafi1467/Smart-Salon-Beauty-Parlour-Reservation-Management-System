const api_key = "AIzaSyA7sJPMAKwl8W_wdQGa17g3PL-WbC2w2zY";

const chatBox = document.getElementById('chat-box');
const userInput = document.getElementById('user-input');
const sendButton = document.getElementById('send-button');

window.onload = () => {
    const savedChat = localStorage.getItem('chatHistory');
    console.log("Saved chat:", savedChat);
    // if(savedChat) chatBox.innerHTML = savedChat;
    // chatBox.scrollTop = chatBox.scrollHeight;
}

function addMessage(message, className) {
    const msgDiv = document.createElement('div');
    msgDiv.classList.add("message", className);
    msgDiv.textContent = message;
    chatBox.appendChild(msgDiv);
    chatBox.scrollTop = chatBox.scrollHeight;
}

function showTyping() {
    const typingDiv = document.createElement('div');
    typingDiv.classList.add("message", "bot-message");
    typingDiv.textContent = "Bot is typing...";
    chatBox.appendChild(typingDiv);
    chatBox.scrollTop = chatBox.scrollHeight;
    return typingDiv;
}

async function getBotReplay(userMessage) {
    const url = `https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash:generateContent?key=${api_key}`;
    
    try {
        const response = await fetch(url, {
            method: 'POST',
            headers: {"Content-Type": "application/json"},
            body: JSON.stringify({
                contents: [{parts: [{text: userMessage}]}]
            })
        });

        const data = await response.json();
        console.log(data);

        if(!response.ok) {
            console.error("API Error:", data);
            return data?.error?.message || "An error occurred while fetching the bot response.";
        }

        return (
            data?.candidates?.[0]?.content?.parts?.[0]?.text || "Sorry, I couldn't generate a response."
        )
    } 
    catch (error) {
        
    }
}

sendButton.onclick = async () => {
    const message = userInput.value.trim();
    if (message === '') return;
    addMessage(message, 'user-message');
    userInput.value = '';

    const typingDiv = showTyping();
    
    const botReply = await getBotReplay(message);
    typingDiv.remove();
    addMessage(botReply, 'bot-message');

    localStorage.setItem('chatHistory', message);

}

userInput.addEventListener('keypress', (e) => {
    if (e.key === 'Enter') {
        sendButton.click();
    }
});