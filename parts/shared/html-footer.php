    <!-- start chat bots -->
    <?php include 'parts/shared/hero-sidebars.php'; ?>
    <!-- Welcome Vision Overlay (Inspired by Imperion Age Verification) -->
    <div id="vision-overlay" class="vision-overlay">
        <div class="vision-modal-content">
            <div class="vision-logo-wrapper">
                <img src="images/new/logo-icon.png" alt="Bhaskar Rao" class="vision-logo">
            </div>
            <h2 class="vision-title">A BETTER BENGALURU</h2>
            <h3 class="vision-subtitle">STARTS WITH US</h3>
            <p class="vision-text">Join Shri Bhaskar Rao IPS (Retd.) in his vision for a transparent, safe, and progressive Karnataka. Are you ready to be a part of the change?</p>
            <div class="vision-btns">
                <button id="btn-vision-join" class="btn btn-vision-primary">YES, I'M IN</button>
                <button id="btn-vision-explore" class="btn btn-vision-secondary">JUST EXPLORING</button>
            </div>
        </div>
    </div>

    <style>
        /* --- Vision Overlay Styles --- */
        .vision-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(10, 20, 27, 0.98);
            z-index: 1000000;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            visibility: hidden;
            transition: all 0.5s ease;
            backdrop-filter: blur(10px);
        }
        .vision-overlay.active {
            opacity: 1;
            visibility: visible;
        }
        .vision-modal-content {
            background: linear-gradient(145deg, #1A202C, #0a0e14);
            padding: 50px 40px;
            border-radius: 30px;
            text-align: center;
            max-width: 500px;
            width: 90%;
            box-shadow: 0 25px 50px rgba(0,0,0,0.5);
            border: 1px solid rgba(244, 115, 14, 0.2);
            transform: scale(0.9);
            transition: transform 0.6s cubic-bezier(0.34, 1.56, 0.64, 1);
        }
        .vision-overlay.active .vision-modal-content {
            transform: scale(1);
        }
        .vision-logo-wrapper {
            margin-bottom: 25px;
        }
        .vision-logo {
            width: 100px;
            filter: drop-shadow(0 0 15px rgba(244,115,14,0.4));
        }
        .vision-title {
            color: #f4730e;
            font-size: 28px;
            font-weight: 800;
            letter-spacing: 2px;
            margin-bottom: 5px;
        }
        .vision-subtitle {
            color: white;
            font-size: 18px;
            font-weight: 400;
            letter-spacing: 4px;
            margin-bottom: 25px;
            opacity: 0.8;
        }
        .vision-text {
            color: rgba(255,255,255,0.7);
            font-size: 15px;
            line-height: 1.6;
            margin-bottom: 35px;
        }
        .vision-btns {
            display: flex;
            gap: 15px;
            justify-content: center;
        }
        .btn-vision-primary {
            background: linear-gradient(135deg, #f4730e 0%, #FFC107 100%);
            color: white;
            border: none;
            padding: 14px 30px;
            border-radius: 50px;
            font-weight: 700;
            font-size: 14px;
            letter-spacing: 1px;
            cursor: pointer;
            transition: all 0.3s;
            box-shadow: 0 10px 20px rgba(244,115,14,0.3);
        }
        .btn-vision-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(244, 115, 14, 0.4);
        }
        .btn-vision-secondary {
            background: transparent;
            color: white;
            border: 1px solid rgba(255,255,255,0.2);
            padding: 14px 30px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s;
        }
        .btn-vision-secondary:hover {
            background: rgba(255,255,255,0.05);
            border-color: white;
        }

        /* --- Shared Widget Wrapper --- */
        .chat-widget {
            position: fixed !important;
            bottom: 30px !important;
            z-index: 99999 !important;
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            pointer-events: none;
        }
        .wa-widget  { left: 30px !important;  align-items: flex-start; }
        .ai-widget  { right: 30px !important; align-items: flex-end; }

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
        .wa-fab  { color: #f4730e; border-color: rgba(244, 115, 14, 0.3); }
        .ai-fab  { color: #f4730e; border-color: rgba(244, 115, 14, 0.3); }

        .chat-fab:hover {
            transform: scale(1.1) translateY(-5px);
            background: rgba(255, 255, 255, 0.15);
            color: #fff;
        }
        .wa-fab:hover { box-shadow: 0 15px 40px rgba(244, 115, 14, 0.3); color: #f4730e; }
        .ai-fab:hover { box-shadow: 0 15px 40px rgba(244, 115, 14, 0.3); color: #f4730e; }

        /* Pulse Ring */
        .chat-pulse {
            position: absolute;
            inset: -2px;
            border-radius: 50%;
            border: 2px solid #f4730e;
            animation: chatPulse 2s infinite;
            pointer-events: none;
            opacity: 0.5;
        }
        .ai-pulse { border-color: #f4730e; }

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
            border-bottom: 2px solid rgba(244, 115, 14, 0.2);
        }
        .wa-header { 
            background: linear-gradient(135deg, #1A202C 0%, #2D3748 100%); 
        }
        .ai-header { 
            background: linear-gradient(135deg, #1A202C 0%, #f4730e 150%); 
        }

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
            background: #f4730e;
            border-radius: 50%;
            display: inline-block;
            box-shadow: 0 0 5px #f4730e;
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
            border: 1px solid #f4730e;
            color: #1A202C;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s;
        }
        .quick-btn:hover { background: #f4730e; color: white; }
        .ai-quick-btn { border-color: #f4730e; color: #e67e22; }
        .ai-quick-btn:hover { background: #f4730e; color: white; border-color: transparent; }

        /* --- Footer --- */
        .chat-footer {
            padding: 12px 15px;
            background: white;
            border-top: 1px solid #eee;
            display: flex;
            gap: 8px;
            align-items: center;
        }
        .ai-footer, .wa-footer { display: flex; gap: 8px; width: 100%; }
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
            background: #f4730e;
            border: none;
            color: white;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .wa-open-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f4730e;
            color: white !important;
            text-decoration: none !important;
            padding: 10px;
            border-radius: 12px;
            font-size: 13px;
            font-weight: 700;
            gap: 8px;
        }
        .wa-open-btn:hover { background: #e67e22; transform: translateY(-2px); box-shadow: 0 5px 15px rgba(244,115,14,0.3); }

        .chat-highlight {
            color: #f4730e;
            font-weight: 700;
        }
        
        @media (max-width: 767px) {
            .chat-widget { bottom: 20px !important; }
            .wa-widget { left: 20px !important; }
            .ai-widget { right: 20px !important; }
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
                            <h4 class="alt-font fw-600 mb-20px ls-minus-1px text-white">Join the Vision.</h4>
                            <p class="fs-16 mb-30px text-white opacity-9">Be the change you want to see. Join us in building a more transparent and responsive governance for Karnataka.</p>
                            <div class="feature-box feature-box-left-icon-middle mb-20px">
                                <div class="feature-box-icon me-15px">
                                    <i class="feather icon-feather-map-pin icon-small text-white"></i>
                                </div>
                                <div class="feature-box-content">
                                    <span class="text-white fs-15 ls-minus-05px fw-600">Local Ward Engagement</span>
                                </div>
                            </div>
                            <div class="feature-box feature-box-left-icon-middle mb-20px">
                                <div class="feature-box-icon me-15px">
                                    <i class="feather icon-feather-users icon-small text-white"></i>
                                </div>
                                <div class="feature-box-content">
                                    <span class="text-white fs-15 ls-minus-05px fw-600">Community Policing</span>
                                </div>
                            </div>
                            <div class="feature-box feature-box-left-icon-middle">
                                <div class="feature-box-icon me-15px">
                                    <i class="feather icon-feather-activity icon-small text-white"></i>
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
                    <button class="quick-btn" onclick="waQuickReply('Constituency Issue')">📍 Resolve an Issue</button>
                    <button class="quick-btn" onclick="waQuickReply('Volunteer')">🤝 Join as Volunteer</button>
                    <button class="quick-btn" onclick="waQuickReply('General Inquiry')">💬 Other Inquiry</button>
                </div>
            </div>
            <div class="chat-footer wa-footer" id="waFooter">
                <input type="text" class="ai-input" id="waInput" placeholder="Select an option above..." onkeydown="if(event.key==='Enter') sendWaMessage()">
                <button class="ai-send-btn" onclick="sendWaMessage()"><i class="bi bi-send"></i></button>
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
                    <button class="quick-btn ai-quick-btn" onclick="aiReply('Who is Bhaskar Rao?')">👤 About Bhaskar Rao</button>
                    <button class="quick-btn ai-quick-btn" onclick="aiReply('Tell me about his IPS Career')">👮 IPS Career</button>
                    <button class="quick-btn ai-quick-btn" onclick="aiReply('What is his vision for Bengaluru?')">🏙️ His Vision</button>
                    <button class="quick-btn ai-quick-btn" onclick="aiReply('What are his key initiatives?')">🚀 Key Initiatives</button>
                    <button class="quick-btn ai-quick-btn" onclick="aiReply('How to report a problem?')">📢 Local Grievance</button>
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

    let waFlow = {
        active: false,
        step: 0,
        type: '',
        data: { name: '', phone: '', details: '' }
    };

    const waReplies = {
        'Meeting Request': {
            intro: '📅 To request a meeting with Shri Bhaskar Rao, I need a few details. First, what is your <span class="chat-highlight">Full Name</span>?',
            name: 'Thanks! Now, what is your <span class="chat-highlight">Phone Number</span>?',
            phone: 'And finally, what is the <span class="chat-highlight">Purpose of your Visit</span>?',
            details: 'Perfect! Click the button below to send this request to our office via WhatsApp.'
        },
        'Constituency Issue': {
            intro: '📍 We are committed to solving issues. To start, what is your <span class="chat-highlight">Full Name</span>?',
            name: 'Got it. What is your <span class="chat-highlight">Phone Number</span>?',
            phone: 'Please describe the <span class="chat-highlight">Issue and Location</span> (e.g., Water problem).',
            details: 'Thank you. You can now send this report to our support team on WhatsApp.'
        },
        'Volunteer': {
            intro: '🤝 Join the movement! To get started, what is your <span class="chat-highlight">Full Name</span>?',
            name: 'Great! What is your <span class="chat-highlight">Phone Number</span>?',
            phone: 'What is your <span class="chat-highlight">Area of Expertise</span>?',
            details: 'Almost there! Click below to send your volunteer interest to be processed.'
        },
        'General Inquiry': {
            intro: '💬 For any other inquiries, please tell me your <span class="chat-highlight">Full Name</span>.',
            name: 'Thanks. What is your <span class="chat-highlight">Phone Number</span>?',
            phone: 'Please type your <span class="chat-highlight">Message/Question</span> here.',
            details: 'Ready! Click below to send your inquiry on WhatsApp.'
        }
    };

    function waQuickReply(key) {
        waFlow.active = true;
        waFlow.step = 1;
        waFlow.type = key;
        
        const body = document.getElementById('waBody');
        const input = document.getElementById('waInput');
        
        appendBubble(body, key, 'outgoing');
        input.placeholder = "Type your name...";
        input.focus();

        setTimeout(() => {
            showTyping(body, 'wa');
            setTimeout(() => {
                removeTyping(body, 'wa');
                appendBubble(body, waReplies[key].intro, 'incoming');
            }, 800);
        }, 400);
    }

    function sendWaMessage() {
        const input = document.getElementById('waInput');
        const msg = input.value.trim();
        if (!msg || !waFlow.active) return;
        
        input.value = '';
        const body = document.getElementById('waBody');
        appendBubble(body, msg, 'outgoing');

        const flow = waReplies[waFlow.type];
        
        setTimeout(() => {
            showTyping(body, 'wa');
            setTimeout(() => {
                removeTyping(body, 'wa');

                if (waFlow.step === 1) {
                    waFlow.data.name = msg;
                    waFlow.step = 2;
                    input.placeholder = "Type your phone number...";
                    appendBubble(body, flow.name, 'incoming');
                } else if (waFlow.step === 2) {
                    waFlow.data.phone = msg;
                    waFlow.step = 3;
                    input.placeholder = "Type specific details...";
                    appendBubble(body, flow.phone, 'incoming');
                } else if (waFlow.step === 3) {
                    waFlow.data.details = msg;
                    waFlow.step = 4;
                    input.disabled = true;
                    input.placeholder = "Flow complete!";
                    appendBubble(body, flow.details, 'incoming');
                    
                    // Final Redirection Button
                    const waLink = finalizeWaLink();
                    const footer = document.getElementById('waFooter');
                    footer.innerHTML = `<a href="${waLink}" target="_blank" class="wa-open-btn" style="width: 100%;"><i class="bi bi-whatsapp"></i> Send on WhatsApp</a>`;
                }
            }, 1000);
        }, 400);
    }

    function finalizeWaLink() {
        const text = `Namaste Shri Bhaskar Rao's Team,\n\nI would like to submit a ${waFlow.type}.\n\nName: ${waFlow.data.name}\nPhone: ${waFlow.data.phone}\nDetails: ${waFlow.data.details}\n\nSubmitted via bhaskarrao.com`;
        return `https://wa.me/919632075100?text=${encodeURIComponent(text)}`;
    }

    const aiKnowledge = {
        'who is bhaskar rao': '👤 Shri Bhaskar Rao is a retired IPS officer of the 1990 batch. Known as the "People\'s Commissioner", he served as the Commissioner of Police, Bengaluru, and ADGP (Internal Security). He is now dedicated to public service in Chamarajpet and across Karnataka.',
        'ips career': '👮 In his 32-year IPS career, he has led several critical departments including Commissioner of Police, Bengaluru (2019-20), KSRP, and Internal Security. He was instrumental during the COVID-19 management and known for modernizing the police force.',
        'vision': '🏙️ His vision is a "Better Bengaluru" built on three pillars: Transparent Governance, Citizen Safety, and Environmentally Sustainable Infrastructure. He believes in empowering the common man through local ward-level reforms.',
        'initiatives': '🚀 Key initiatives include:\n• Cycling Campaigns (Green Mobility Advocate)\n• Bhaskar Rao Charitable Trust (Education & Health)\n• Social Welfare Drives (Empowering Local Artisans)\n• Citizens for Safety (Community Policing).',
        'report a problem': '📢 You can report local issues through our "Voice of the People" portal. Please visit the [Grievance Page](constituency.php) to file a formal request or detail your issue here for our team.',
        'default': '🙏 Thank you for your interest. Shri Bhaskar Rao is committed to a progress-driven Karnataka. You can explore his IPS Career, Political Journey, and Social Initiatives using the links on this website. Jai Hind!'
    };

    // Vision Overlay Logic (Inspired by Imperion Age Verification)
    (function() {
        var visionCheck = localStorage.getItem("rao_vision_seen");
        var overlay = document.getElementById("vision-overlay");
        var joinBtn = document.getElementById("btn-vision-join");
        var exploreBtn = document.getElementById("btn-vision-explore");

        if (!visionCheck) {
            setTimeout(() => {
                overlay.classList.add("active");
                document.body.style.overflow = "hidden"; // Prevent scrolling
            }, 1000); // 1s delay for better UX
        }

        if (joinBtn) {
            joinBtn.addEventListener("click", function() {
                localStorage.setItem("rao_vision_seen", "true");
                overlay.classList.remove("active");
                document.body.style.overflow = ""; // Restore scrolling
                // Open WhatsApp widget automatically
                setTimeout(() => toggleChatWindow('wa'), 500);
            });
        }

        if (exploreBtn) {
            exploreBtn.addEventListener("click", function() {
                localStorage.setItem("rao_vision_seen", "true");
                overlay.classList.remove("active");
                document.body.style.overflow = ""; // Restore scrolling
            });
        }
    })();

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
