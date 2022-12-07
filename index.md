---
# You don't need to edit this file, it's empty on purpose.
# Edit theme's home layout instead if you wanna make some changes
# See: https://jekyllrb.com/docs/themes/#overriding-theme-defaults
layout: default
---

<div class="home">
  <div style="overflow: auto">
    <div style="display: inline-block; width:30%; vertical-align: middle;">
      <img src="{{ '/images/Siddhant.jpg' | relative_url}}" alt="Siddhant Ranade">
    </div>

    <div style="display: inline-block;; vertical-align: middle;">
      <ul style="list-style-type:none;">
          <li>
            {% if site.author %}
              <h2>{{ site.author | escape }}</h2>
            {% else %}
              <h2>{{ site.title | escape }}</h2>
            {% endif %}
          </li>
          {% if site.email %}
          <li>{{ site.email }}</li>
          {% endif %}
          {% include social.html %}
        </ul>
    </div>

  </div>
</div>

<br>

<h2>About me</h2>
I am a PhD candidate at the <a href="https://www.cs.utah.edu/">School of Computing</a> at the <a href="https://www.utah.edu/">University of Utah</a>, advised by <a href="https://www.cs.utah.edu/~srikumar/">Prof. Srikumar Ramalingam</a> and <a href="https://www.cs.utah.edu/~whitaker/">Prof. Ross Whitaker</a>.

My research focuses on Computer Vision, particularly scene reconstruction.

I earned my Bachelor's degree from the <a href="http://www.iitb.ac.in/">Indian Institute of Technology Bombay</a>, where I majored in Engineering Physics, with a minor in Computer Science.  At IITB, I worked with Prof. <a href="https://www.cse.iitb.ac.in/~sidch/">Siddhartha Chaudhuri</a> on my Bachelor's Thesis.
