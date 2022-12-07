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
  <td style="padding:0.2em;">
    <img src="{{paper.picture}}" alt="{{paper.title}}" style="max-height:12em;margin:auto;display:block;">
  </td>
  <td>
  <div><b><a href="{{ paper.url }}">{{ paper.title }}</a></b></div>
  <div><i>{{ paper.author }}</i></div>
  <div>
    <b>{{ paper.venue }} </b>
    {%- if paper.pdf -%} • <span><a href="{{paper.pdf}}"> PDF </a> </span> {%- endif -%}
    {%- if paper.arxiv -%} • <span><a href="{{paper.arxiv}}"> arXiv </a> </span> {%- endif -%}
    {%- if paper.website -%} • <span><a href="{{paper.website}}"> Website </a> </span> {%- endif -%}
    {%- if paper.conf -%} • <span><a href="{{paper.conf}}"> Conference Page </a> </span> {%- endif -%}
    {%- if paper.video -%} • <span><a href="{{paper.video}}"> Video </a> </span> {%- endif -%}
  </div>
  <div>{{ paper.content | strip_html | truncatewords:20  }} <a href="{{ paper.url }}">more</a></div>
  </td>
</tr>


{% endfor %}
</tbody>
</table>
