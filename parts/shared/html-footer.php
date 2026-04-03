    <!-- start chat bots -->
    <style>
        /* --- Shared Widget Wrapper --- */
        .chat-widget {
            position: fixed;
            bottom: 30px;
            z-index: 99999;
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            pointer-events: none;
        }
        .wa-widget  { left: 30px;  align-items: flex-start; }
        .ai-widget  { right: 30px; align-items: flex-end; }

        /* --- FAB Trigger Buttons --- */
        .chat-fab {
            width: 58px;
            height: 58px;
            border-radius: 50%;
            border: none;
            cursor: pointer;
            font-size: 24px;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            transition: transform 0.3s cubic-bezier(0.34,1.56,0.64,1), box-shadow 0.3s;
            box-shadow: 0 10px 30px rgba(0,0,0,0.4);
            flex-shrink: 0;
            order: 2;
            pointer-events: auto;
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.15);
            background: rgba(0, 0, 0, 0.7);
        }
        .wa-fab  { color: #FF9933; border-color: rgba(255, 153, 51, 0.3); }
        .ai-fab  { color: #FF9933; border-color: rgba(255, 153, 51, 0.3); }

        .chat-fab:hover {
            transform: scale(1.1) translateY(-5px);
            background: rgba(255, 255, 255, 0.15);
            color: #fff;
        }
        .wa-fab:hover { box-shadow: 0 15px 40px rgba(255, 153, 51, 0.3); color: #FF9933; }
        .ai-fab:hover { box-shadow: 0 15px 40px rgba(255, 153, 51, 0.3); color: #FF9933; }

        /* Pulse Ring */
        .chat-pulse {
            position: absolute;
            inset: -2px;
            border-radius: 50%;
            border: 2px solid #FF9933;
            animation: chatPulse 2s infinite;
            pointer-events: none;
            opacity: 0.5;
        }
        .ai-pulse { border-color: #FF9933; }

        @keyframes chatPulse {
            0%   { transform: scale(1);   opacity: 0.5; }
            70%  { transform: scale(1.4); opacity: 0; }
            100% { transform: scale(1.4); opacity: 0; }
        }

        /* --- Chat Window --- */
        .chat-window {
            width: 320px;
            max-height: 480px;
            background: #fff;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 25px 60px rgba(0,0,0,0.2);
            display: flex;
            flex-direction: column;
            margin-bottom: 15px;
            order: 1;
            pointer-events: none;
            height: 0;
            opacity: 0;
            visibility: hidden;
            transform: translateY(20px) scale(0.95);
            transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
        }
        .wa-widget .chat-window { transform-origin: bottom left; }
        .ai-widget .chat-window { transform-origin: bottom right; }

        .chat-window.chat-open {
            height: auto;
            opacity: 1;
            visibility: visible;
            transform: translateY(0) scale(1);
            pointer-events: auto;
        }

        /* --- Header --- */
        .chat-header {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 15px 18px;
            color: white;
            flex-shrink: 0;
        }
        .wa-header { background: #1A202C; }
        .ai-header { background: linear-gradient(135deg, #1a2a6c, #b21f1f, #fdbb2d); }

        .chat-header-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            flex-shrink: 0;
            background: rgba(255,255,255,0.15);
        }

        .chat-header-name {
            font-weight: 700;
            font-size: 14px;
            line-height: 1.2;
        }
        .chat-header-status {
            font-size: 11px;
            opacity: 0.8;
            display: flex;
            align-items: center;
            gap: 5px;
            margin-top: 2px;
        }
        .online-dot {
            width: 7px;
            height: 7px;
            background: #FF9933;
            border-radius: 50%;
            display: inline-block;
            box-shadow: 0 0 5px #FF9933;
        }

        .chat-close-btn {
            margin-left: auto;
            background: rgba(255,255,255,0.15);
            border: none;
            color: white;
            width: 28px;
            height: 28px;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            transition: background 0.2s;
        }
        .chat-close-btn:hover { background: rgba(255,255,255,0.3); }

        /* --- Chat Body --- */
        .chat-body {
            flex: 1;
            overflow-y: auto;
            padding: 15px;
            background: #f8f9fa;
            display: flex;
            flex-direction: column;
            gap: 10px;
            scroll-behavior: smooth;
            min-height: 300px;
            max-height: 320px;
        }
        .wa-window .chat-body { background: #e5ddd5 url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23c9bfb5' fill-opacity='0.2'%3E%3Ccircle cx='30' cy='30' r='0.5'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E"); }

        .chat-body::-webkit-scrollbar { width: 4px; }
        .chat-body::-webkit-scrollbar-thumb { background: rgba(0,0,0,0.1); border-radius: 10px; }

        .chat-bubble {
            max-width: 85%;
            padding: 10px 14px;
            border-radius: 18px;
            font-size: 13px;
            line-height: 1.5;
            position: relative;
            animation: bubbleIn 0.3s ease;
        }
        @keyframes bubbleIn {
            from { opacity: 0; transform: translateY(10px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        .chat-bubble.incoming {
            background: white;
            color: #333;
            border-radius: 0 18px 18px 18px;
            align-self: flex-start;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }
        .chat-bubble.outgoing {
            background: #dcf8c6;
            color: #111;
            border-radius: 18px 18px 0 18px;
            align-self: flex-end;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }
        .ai-window .chat-bubble.outgoing { background: #fff4e6; border: 1px solid #ffe8cc; }

        .chat-time {
            font-size: 9px;
            color: #aaa;
            display: block;
            text-align: right;
            margin-top: 4px;
        }

        .typing-indicator {
            display: flex;
            gap: 4px;
            padding: 12px 18px !important;
        }
        .typing-indicator span {
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: #ccc;
            animation: typingBounce 1.2s infinite;
        }
        .typing-indicator span:nth-child(2) { animation-delay: 0.2s; }
        .typing-indicator span:nth-child(3) { animation-delay: 0.4s; }
        @keyframes typingBounce {
            0%, 60%, 100% { transform: translateY(0); }
            30% { transform: translateY(-4px); }
        }

        /* --- Quick Replies --- */
        .quick-btns {
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
            margin-top: 5px;
        }
        .quick-btn {
            background: white;
            border: 1px solid #FF9933;
            color: #1A202C;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s;
        }
        .quick-btn:hover { background: #FF9933; color: white; }
        .ai-quick-btn { border-color: #FF9933; color: #e67e22; }
        .ai-quick-btn:hover { background: #FF9933; color: white; border-color: transparent; }

        /* --- Footer --- */
        .chat-footer {
            padding: 12px 15px;
            background: white;
            border-top: 1px solid #eee;
        }
        .wa-open-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            background: #FF9933;
            color: white !important;
            text-decoration: none !important;
            padding: 10px;
            border-radius: 12px;
            font-size: 13px;
            font-weight: 700;
            gap: 8px;
        }
        .ai-footer { display: flex; gap: 8px; }
        .ai-input {
            flex: 1;
            border: 1px solid #e0e0e0;
            border-radius: 20px;
            padding: 8px 15px;
            font-size: 13px;
            outline: none;
        }
        .ai-send-btn {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: #FF9933;
            border: none;
            color: white;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        @media (max-width: 767px) {
            .chat-widget { bottom: 20px; }
            .wa-widget { left: 20px; }
            .ai-widget { right: 20px; }
            .chat-window { width: 280px; }
        }
    </style>

    <!-- Join the Vision Modal -->
    <div class="modal fade" id="vision-modal" tabindex="-1" aria-labelledby="vision-modal-label" aria-hidden="true" style="z-index: 10000 !important;">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-radius-10px overflow-hidden border-0">
                <div class="modal-body p-0">
                    <div class="row g-0">
                        <!-- Left Column: Branding -->
                        <div class="col-lg-5 bg-gradient-blue-ironstone-brown p-5 d-flex flex-column justify-content-center text-white md-display-none">
                            <h4 class="alt-font fw-600 mb-20px ls-minus-1px">Join the Vision.</h4>
                            <p class="fs-16 opacity-8 mb-30px">Be the change you want to see. Join us in building a more transparent and responsive governance for Karnataka.</p>
                            <div class="feature-box feature-box-left-icon-middle mb-20px">
                                <div class="feature-box-icon me-15px">
                                    <i class="feather icon-feather-map-pin icon-small text-white opacity-4"></i>
                                </div>
                                <div class="feature-box-content">
                                    <span class="text-white fs-15 ls-minus-05px fw-600">Local Ward Engagement</span>
                                </div>
                            </div>
                            <div class="feature-box feature-box-left-icon-middle mb-20px">
                                <div class="feature-box-icon me-15px">
                                    <i class="feather icon-feather-users icon-small text-white opacity-4"></i>
                                </div>
                                <div class="feature-box-content">
                                    <span class="text-white fs-15 ls-minus-05px fw-600">Community Policing</span>
                                </div>
                            </div>
                            <div class="feature-box feature-box-left-icon-middle">
                                <div class="feature-box-icon me-15px">
                                    <i class="feather icon-feather-activity icon-small text-white opacity-4"></i>
                                </div>
                                <div class="feature-box-content">
                                    <span class="text-white fs-15 ls-minus-05px fw-600">Governance Transparency</span>
                                </div>
                            </div>
                        </div>
                        <!-- Right Column: Form -->
                        <div class="col-lg-7 p-5 bg-white position-relative">
                            <button type="button" class="btn-close me-10px mt-10px" data-bs-dismiss="modal" aria-label="Close" style="position: absolute; right: 10px; top: 10px;"></button>
                            <h5 class="alt-font text-dark-gray fw-700 mb-5px">Join the Movement</h5>
                            <p class="mb-30px fs-15">Fill out the details below to join the vision for a better Bengaluru.</p>
                            <form action="#" method="post" class="row contact-form-style-02">
                                <div class="col-md-12 mb-20px">
                                    <input class="form-control border-radius-4px border-color-extra-medium-gray bg-white required" type="text" name="name" placeholder="Your Full Name*">
                                </div>
                                <div class="col-md-12 mb-20px">
                                    <input class="form-control border-radius-4px border-color-extra-medium-gray bg-white required" type="email" name="email" placeholder="Your Email Address*">
                                </div>
                                <div class="col-md-12 mb-20px">
                                    <input class="form-control border-radius-4px border-color-extra-medium-gray bg-white required" type="tel" name="phone" placeholder="Contact Number*">
                                </div>
                                <div class="col-md-12 mb-20px">
                                    <select class="form-select border-radius-4px border-color-extra-medium-gray bg-white required" name="area">
                                        <option value="" selected disabled>Primary Area of Interest*</option>
                                        <option value="Governance">Public Governance</option>
                                        <option value="Safety">Public Safety & Policing</option>
                                        <option value="Development">Social Development</option>
                                        <option value="Infrastructure">Local Infrastructure</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn-medium btn-rounded with-rounded bg-gradient-blue-ironstone-brown text-white border-0 btn-box-shadow w-100" type="submit">Send Message<span class="bg-blue-licorice text-white"><i class="feather icon-feather-chevron-right fs-18"></i></span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- WhatsApp Widget -->
    <div class="chat-widget wa-widget" id="waWidget">
        <button class="chat-fab wa-fab" id="waToggle" title="Chat on WhatsApp">
            <i class="bi bi-whatsapp"></i>
            <span class="chat-pulse"></span>
        </button>
        <div class="chat-window" id="waWindow">
            <div class="chat-header wa-header">
                <div class="chat-header-avatar"><i class="bi bi-whatsapp"></i></div>
                <div class="chat-header-info">
                    <div class="chat-header-name">Office of Bhaskar Rao</div>
                    <div class="chat-header-status"><span class="online-dot"></span> Online</div>
                </div>
                <button class="chat-close-btn" onclick="toggleChatWindow('wa')"><i class="bi bi-x"></i></button>
            </div>
            <div class="chat-body" id="waBody">
                <div class="chat-bubble incoming">
                    <p>Namaste! 🙏<br>Welcome to the official desk of Shri Bhaskar Rao. How can we assist you today?</p>
                    <span class="chat-time">Just now</span>
                </div>
                <div class="quick-btns">
                    <button class="quick-btn" onclick="waQuickReply('Meeting Request')">📅 Meeting Request</button>
                    <button class="quick-btn" onclick="waQuickReply('Constituency Issue')">📍 Constituency Issue</button>
                    <button class="quick-btn" onclick="waQuickReply('General Inquiry')">💬 General Inquiry</button>
                </div>
            </div>
            <div class="chat-footer">
                <a href="https://wa.me/919632075100" target="_blank" class="wa-open-btn">
                    <i class="bi bi-whatsapp"></i> Open in WhatsApp
                </a>
            </div>
        </div>
    </div>

    <!-- AI Assistant Widget -->
    <div class="chat-widget ai-widget" id="aiWidget">
        <button class="chat-fab ai-fab" id="aiToggle" title="Vision AI Assistant">
            <i class="bi bi-stars"></i>
            <span class="chat-pulse ai-pulse"></span>
        </button>
        <div class="chat-window" id="aiWindow">
            <div class="chat-header ai-header">
                <div class="chat-header-avatar"><i class="bi bi-robot"></i></div>
                <div class="chat-header-info">
                    <div class="chat-header-name">Vision AI Assistant</div>
                    <div class="chat-header-status"><span class="online-dot"></span> Active</div>
                </div>
                <button class="chat-close-btn" onclick="toggleChatWindow('ai')"><i class="bi bi-x"></i></button>
            </div>
            <div class="chat-body" id="aiBody">
                <div class="chat-bubble incoming">
                    <p>Namaste! I am your <strong>Vision Assistant</strong>. I can help you learn about Shri Bhaskar Rao's career, initiatives, and vision for Chamarajpet. Ask me anything!</p>
                    <span class="chat-time">Just now</span>
                </div>
                <div class="quick-btns">
                    <button class="quick-btn ai-quick-btn" onclick="aiReply('Who is Bhaskar Rao?')">👤 Profile</button>
                    <button class="quick-btn ai-quick-btn" onclick="aiReply('What is his vision for Bengaluru?')">🏙️ Vision</button>
                    <button class="quick-btn ai-quick-btn" onclick="aiReply('What are his key initiatives?')">🚀 Initiatives</button>
                    <button class="quick-btn ai-quick-btn" onclick="aiReply('How to report a problem?')">📢 Grievance</button>
                </div>
            </div>
            <div class="chat-footer ai-footer">
                <input type="text" class="ai-input" id="aiInput" placeholder="Type your question..." onkeydown="if(event.key==='Enter') sendAiMessage()">
                <button class="ai-send-btn" onclick="sendAiMessage()"><i class="bi bi-send"></i></button>
            </div>
        </div>
    </div>

    <script>
    function toggleChatWindow(type) {
        const win = document.getElementById(type + 'Window');
        win.classList.toggle('chat-open');
    }
    document.getElementById('waToggle').addEventListener('click', () => toggleChatWindow('wa'));
    document.getElementById('aiToggle').addEventListener('click', () => toggleChatWindow('ai'));

    const waReplies = {
        'Meeting Request': '📅 To request a meeting with Shri Bhaskar Rao, please provide your Name, Purpose, and Preferred Date. Our team will coordinate with the office schedule.',
        'Constituency Issue': '📍 We are committed to solving issues in Chamarajpet. Please describe the problem (Location, Issue Type) so our ground team can take action.',
        'General Inquiry': '💬 For general information, invitations, or status updates, please leave your message here or visit our office at Malleshwaram.'
    };

    function waQuickReply(key) {
        const body = document.getElementById('waBody');
        appendBubble(body, key, 'outgoing');
        setTimeout(() => {
            showTyping(body, 'wa');
            setTimeout(() => {
                removeTyping(body, 'wa');
                appendBubble(body, waReplies[key], 'incoming');
            }, 1200);
        }, 400);
    }

    const aiKnowledge = {
        'who is bhaskar rao': '👤 Shri Bhaskar Rao is a retired IPS officer of the 1990 batch. He served as the **Commissioner of Police, Bengaluru**, and **ADGP (Internal Security)**. He is now dedicated to public service in **Chamarajpet**.',
        'vision': '🏙️ His vision is a **"Better Bengaluru"** built on accountable governance, public safety, and sustainable infra. He believes in "Greater Chamarajpet" through grassroots transformation.',
        'initiatives': '🚀 Key initiatives include:\n• **Cycling Campaigns** for green mobility\n• **Blood Donation Drives** (Red Cross)\n• **Janatha Samparka** (Weekly Town Halls)\n• **Charitable Trust** social work.',
        'report a problem': '📢 You can report local issues through our **"Voice of the People"** portal. Please visit the [Grievance Page](voice-people-form.php) to file a formal request.',
        'default': '🙏 Thank you for your inquiry. For detailed information, you can explore the "About" and "Initiatives" sections of this website, or visit our office in Malleshwaram. Jai Hind!'
    };

    function aiReply(question) {
        const body = document.getElementById('aiBody');
        appendBubble(body, question, 'outgoing');
        setTimeout(() => {
            showTyping(body, 'ai');
            setTimeout(() => {
                removeTyping(body, 'ai');
                const key = Object.keys(aiKnowledge).find(k => question.toLowerCase().includes(k));
                appendBubble(body, aiKnowledge[key || 'default'], 'incoming');
            }, 1500);
        }, 400);
    }

    function sendAiMessage() {
        const input = document.getElementById('aiInput');
        const msg = input.value.trim();
        if (!msg) return;
        input.value = '';
        aiReply(msg);
    }

    function appendBubble(body, text, type) {
        const time = new Date().toLocaleTimeString('en-US', { hour: '2-digit', minute: '2-digit' });
        const div = document.createElement('div');
        div.className = `chat-bubble ${type}`;
        div.innerHTML = `<p>${text.replace(/\n/g, '<br>')}</p><span class="chat-time">${time}</span>`;
        body.appendChild(div);
        body.scrollTop = body.scrollHeight;
    }

    function showTyping(body, id) {
        const div = document.createElement('div');
        div.className = 'chat-bubble incoming typing-indicator';
        div.id = `typing-${id}`;
        div.innerHTML = `<span></span><span></span><span></span>`;
        body.appendChild(div);
        body.scrollTop = body.scrollHeight;
    }

    function removeTyping(body, id) {
        const el = document.getElementById(`typing-${id}`);
        if (el) el.remove();
    }
    </script>

    <!-- javascript libraries -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/vendors.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    
    <!-- Video Modal -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content border-0 bg-transparent">
                <div class="modal-header border-0 p-0 mb-10px">
                    <button type="button" class="btn-close btn-close-white ms-auto shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <div class="ratio ratio-16x9 shadow-extra-large border-radius-10px overflow-hidden">
                        <iframe id="videoIframe" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var videoModal = document.getElementById('videoModal');
        if (videoModal) {
            var videoIframe = document.getElementById('videoIframe');
            videoModal.addEventListener('show.bs.modal', function(event) {
                var button = event.relatedTarget;
                var videoId = button.getAttribute('data-video-id');
                videoIframe.src = 'https://www.youtube.com/embed/' + videoId + '?autoplay=1';
            });
            videoModal.addEventListener('hidden.bs.modal', function() {
                videoIframe.src = '';
            });
        }
    });
    </script>
</body>

</html>
