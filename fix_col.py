import os
import re

directory = "/Applications/MAMP/htdocs/bhaskar-rao/"

old_text = r"""            <div class="col-xl-5 col-lg-4 d-none d-lg-block position-relative z-index-2 text-end" style="padding-top: 80px;">
                <div class="d-inline-block position-relative">
                    <img src="images/new/banners/innerpage-banner.webp" class="border-radius-15px box-shadow-quadruple-large border border-4 border-white" style="max-height: 400px; object-fit: cover;" alt="Banner">
                    <div class="position-absolute left-minus-10px top-minus-10px w-100 h-100 bg-gradient-saffron border-radius-15px z-index-minus-1" style="opacity: 0.5;"></div>
                </div>
            </div>"""

count = 0
for filename in os.listdir(directory):
    if filename.endswith(".php"):
        filepath = os.path.join(directory, filename)
        with open(filepath, "r") as f:
            content = f.read()

        # Remove the erroneously placed injected block completely first
        content_cleaned = content.replace(old_text, "")
        
        # Now find the correct place to put it:
        section_match = re.search(r'(<section class=\"[^\"]*inner-hero-header.*?</section>)', content_cleaned, re.DOTALL)
        if section_match:
            section_html = section_match.group(1)
            # Find the closing three divs and the section
            # </div>\n        </div>\n    </div>\n</section>
            # we want to insert PRECISELY between the first closing div of the col, and the second closing div
            pattern_end = re.compile(r'(\s*</div>)(\s*</div>\s*</div>\s*</section>)')
            
            modified_section_html = pattern_end.sub(r'\1\n' + old_text + r'\2', section_html)
            new_content = content_cleaned.replace(section_html, modified_section_html)
            
            if new_content != content:
                with open(filepath, "w") as f:
                    f.write(new_content)
                count += 1
                
print(f"Fixed {count} files")
