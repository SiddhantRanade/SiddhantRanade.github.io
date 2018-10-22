---
layout: page
title: Research
permalink: /research/
---

<table>
<colgroup>
<col width="20%" />
<col width="80%" />
</colgroup>
<tbody>

{% for paper in site.categories.research %}

<tr>
  <td><img src="{{paper.picture}}" alt="{{paper.title}}"></td>
  <td>
  <div><b>{{ paper.title }}</b></div>
  <div><i>{{ paper.venue }}</i></div>
  <p>{{ paper.content | truncatewords:20 | strip_html }} <a href="{{ paper.url }}">more</a></p>
  <span><a href="{{paper.pdf}}"> PDF </a> </span> &nbsp; &nbsp;
  <span><a href="{{paper.website}}"> Website </a> </span> &nbsp; &nbsp;
  </td>
</tr>


{% endfor %}
</tbody>
</table>
