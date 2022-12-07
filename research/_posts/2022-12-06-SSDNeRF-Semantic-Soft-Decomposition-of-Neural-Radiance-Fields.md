---
layout: paper
title: "SSDNeRF: Semantic Soft Decomposition of Neural Radiance Fields"
author: "Siddhant Ranade, Christoph Lassner, Kai Li, Christian Haene, Shen-Chi Chen, Jean-Charles Bazin, and Sofien Bouaziz"
venue: "arXiv (preprint)"
picture: "/research/assets/22_SSDNeRF.jpg"
arxiv: ""
pdf: ""
# conf: ""
video: "https://www.youtube.com/watch?v=W3YTHxEfaXQ"
---

<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/W3YTHxEfaXQ?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

Neural Radiance Fields (NeRFs) encode the radiance in a scene parameterized by the scene's plenoptic function.
This is achieved by using an MLP together with a mapping to a higher-dimensional space, and has been proven to capture scenes with a great level of detail.
Naturally, the same parameterization can be used to encode additional properties of the scene, beyond just its radiance.
A particularly interesting property in this regard is the semantic decomposition of the scene.
We introduce a novel technique for semantic soft decomposition of neural radiance fields (named SSDNeRF) which jointly encodes semantic signals in combination with radiance signals of a scene.
Our approach provides a _soft_ decomposition of the scene into semantic parts, enabling us to correctly encode multiple semantic classes blending along the same direction---an impossible feat for existing methods.
Not only does this lead to a detailed, 3D semantic representation of the scene, but we also show that the regularizing effects of the MLP used for encoding help to improve the semantic representation.
We show state-of-the-art segmentation and reconstruction results on a dataset of
common objects and demonstrate how the proposed approach can be applied for high
quality temporally consistent video editing and re-compositing on a dataset of
casually captured selfie videos.
