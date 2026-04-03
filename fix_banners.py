import os
import re

directory = "/Applications/MAMP/htdocs/bhaskar-rao/"

pattern_bg = re.compile(r'style="background-image:\s*url\(\'images/new/banners/innerpage-banner\.webp\'\);background-position:\s*center\s*80px;"')
pattern_foreground = re.compile(r'<img[^>]*class="[^"]*hero-foreground-img[^"]*"[^>]*>\s*')
pattern_container_end = re.compile(r'(\s*</div>\s*</div>\s*</div>\s*</section>)')

new_hero_html = r'''
            <div class="col-xl-5 col-lg-4 d-none d-lg-block position-relative z-index-2 text-end" style="padding-top: 80px;">
                <div class="d-inline-block position-relative">
                    <img src="images/new/banners/innerpage-banner.webp" class="border-radius-15px box-shadow-quadruple-large border border-4 border-white" style="max-height: 400px; object-fit: cover;" alt="Banner">
                    <div class="position-absolute left-minus-10px top-minus-10px w-100 h-100 bg-gradient-saffron border-radius-15px z-index-minus-1" style="opacity: 0.5;"></div>
                </div>
            </div>\1'''

count = 0
for filename in os.listdir(directory):
    if filename.endswith(".php"):
        filepath = os.path.join(directory, filename)
        with open(filepath, "r") as f:
            content = f.read()

        # Step 1: Revert background
        bg_url = "images/new/slider/chamrajpet.jpg" if filename == "constituency.php" else "images/new/slider/1.png"
        new_content = pattern_bg.sub(f'style="background-image: url(\'{bg_url}\');"', content)

        # Step 2: Remove old hero foreground image
        new_content = pattern_foreground.sub('', new_content)

        # Step 3: Inject the new innerpage-banner.webp into the container
        section_match = re.search(r'(<section class=\"[^\"]*inner-hero-header.*?</section>)', new_content, re.DOTALL)
        if section_match:
            section_html = section_match.group(1)
            # Inject new html before the closing tags of the row/container/section
            modified_section_html = pattern_container_end.sub(new_hero_html, section_html)
            new_content = new_content.replace(section_html, modified_section_html)
        
        if new_content != content:
            with open(filepath, "w") as f:
                f.write(new_content)
            count += 1
            print(f"Updated {filename}")

print(f"Total files updated: {count}")
