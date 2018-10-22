---
layout: page
title: Research
permalink: /research/
---

<table>
<colgroup>
<col width="30%" />
<col width="70%" />
</colgroup>
<tbody>

{% for paper in site.categories.research %}

<tr>
  <td><img src="{{paper.picture}}" alt="{{paper.title}}"></td>
  <td>
  <div><b>{{ paper.title }}</b></div>
  <div><i>{{ paper.author }}</i></div>
  <div><b>{{ paper.venue }}</b></div>
  <div>{{ paper.content | truncatewords:20 | strip_html }} <a href="{{ paper.url }}">more</a></div>
  <div>{%- if paper.pdf -%} <span><a href="{{paper.pdf}}"> PDF </a> </span> {%- endif -%}
  {%- if paper.website -%} • <span><a href="{{paper.website}}"> Website </a> </span> {%- endif -%}</div>
  </td>
</tr>


{% endfor %}
</tbody>
</table>
