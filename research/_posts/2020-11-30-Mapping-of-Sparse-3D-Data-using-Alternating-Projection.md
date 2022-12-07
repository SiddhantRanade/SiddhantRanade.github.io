---
layout: paper
title: "Mapping of Sparse 3D Data using Alternating Projection"
author: "Siddhant Ranade, Xin Yu, Shantnu Kakkar, Pedro Miraldo, and Srikumar Ramalingam"
venue: "ACCV 2020"
picture: "/research/assets/20_ACCV_Mapping_AP.png"
arxiv: "https://arxiv.org/abs/2010.02516"
pdf: "https://openaccess.thecvf.com/content/ACCV2020/papers/Ranade_Mapping_of_Sparse_3D_Data_using_Alternating_Projection_ACCV_2020_paper.pdf"
conf: "https://openaccess.thecvf.com/content/ACCV2020/html/Ranade_Mapping_of_Sparse_3D_Data_using_Alternating_Projection_ACCV_2020_paper.html"
video: "https://www.youtube.com/watch?v=WFgEUromk30"
---

<iframe width="100%" style="aspect-ratio: 16 / 9;" src="https://www.youtube-nocookie.com/embed/WFgEUromk30?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<br>

We propose a novel technique to register sparse 3D scans in the absence of texture. While existing methods such as KinectFusion or Iterative Closest Points (ICP) heavily rely on dense point clouds, this task is particularly challenging under sparse conditions without RGB data. Sparse texture-less data does not come with high-quality boundary signal, and this prohibits the use of correspondences from corners, junctions, or boundary lines. Moreover, in the case of sparse data, it is incorrect to assume that the same point will be captured in two consecutive scans. We take a different approach and first re-parameterize the point-cloud using a large number of line segments. In this re-parameterized data, there exists a large number of line intersection (and not correspondence) constraints that allow us to solve the registration task. We propose the use of a two-step alternating projection algorithm by formulating the registration as the simultaneous satisfaction of intersection and rigidity constraints. Despite the simplicity, the proposed approach outperforms other top-scoring algorithms on both Kinect and LiDAR datasets. In Kinect, we can use 100X downsampled sparse data and still outperform competing methods operating on full-resolution data.