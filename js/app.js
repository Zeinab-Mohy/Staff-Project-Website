class Chatbox {
    constructor() {
        this.args = {
            openButton: document.querySelector('.chatbox__button'),
            chatBox: document.querySelector('.chatbox__support'),
            sendButton: document.querySelector('.send__button')
        }

        this.state = false;
        this.messages = [];
    }

    display() {
        const { openButton, chatBox, sendButton } = this.args;

        openButton.addEventListener('click', () => this.toggleState(chatBox))

        sendButton.addEventListener('click', () => this.onSendButton(chatBox))

        const node = chatBox.querySelector('input');
        node.addEventListener("keyup", ({ key }) => {
            if (key === "Enter") {
                this.onSendButton(chatBox)
            }
        })
    }

    toggleState(chatbox) {
        this.state = !this.state;

        // show or hides the box
        if (this.state) {
            chatbox.classList.add('chatbox--active')
        } else {
            chatbox.classList.remove('chatbox--active')
        }
    }

    onSendButton(chatbox) {
        var textField = chatbox.querySelector('input');
        let text1 = textField.value
        if (text1 === "") {
            return;
        }

        let msg1 = { name: "User", message: text1 }
        this.messages.push(msg1);
        this.updateChatText(chatbox)
        textField.value = ''

    }

    updateChatText(chatbox) {
        var html = '';
        this.messages.slice().reverse().forEach(function (item, index) {
            let botResponse = getBotResponse(item.message);
            if (item.name === "User") {
                html += '<div class="messages__item messages__item--operator">' + botResponse + '</div>'
            }
            {

                html += '<div class="messages__item messages__item--visitor">' + item.message + '</div>'
            }

        });

        const chatmessage = chatbox.querySelector('.chatbox__messages');
        chatmessage.innerHTML = html;
    }

    // onSendButton(chatbox) {
    //     let html = '';
    //     var textField = chatbox.querySelector('input');
    //     let text1 = textField.value
    //     if (text1 === "") {
    //         return;
    //     }
    //     let msg1 = { name: "User", message: text1 }
    //     this.messages.push(msg1);
    //     this.messages.slice().reverse().forEach(function (item, index) {
    //         if (item.name === "User") {
    //             html += '<div class="messages__item messages__item--operator">' + item.message + '</div>'
    //             $(".chatbox__messages").append(html);
    //         }
    //     })
    //     this.updateChatText(chatbox)
    //     textField.value = ''

    // }

    // updateChatText(chatbox) {
    //     let html = '';
    //     let htm2 = '';
    //     this.messages.slice().reverse().forEach(function (item, index) {
    //         if (item.name === "User") {
    //             html += '<div class="messages__item messages__item--operator">' + item.message + '</div>'
    //             $(".chatbox__messages").append(html);
    //         }
    //         let botResponse = getBotResponse(item.message);
    //         htm2 += '<div class="messages__item messages__item--visitor">' + botResponse + '</div>'
    //         $(".chatbox__messages").append(htm2);

    //     });

    // }
}


const chatbox = new Chatbox();
chatbox.display();

















