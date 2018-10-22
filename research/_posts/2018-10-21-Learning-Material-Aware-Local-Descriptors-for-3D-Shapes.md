---
layout: paper
title: "Learning Material-Aware Local Descriptors for 3D Shapes"
author: "Hubert Lin, Melinos Averkiou, Evangelos Kalogerakis, Balazs Kovacs, Siddhant Ranade, Vladimir G. Kim, Siddhartha Chaudhuri, and Kavita Bala"
venue: "3DV 2018"
picture: "/research/assets/18_3DV_ShapeMatFeat.jpg"
pdf: "/research/assets/18_3DV_ShapeMatFeat.pdf"
# website: "/MatTrans/"
---

Material understanding is critical for design, geometric modeling, and analysis of functional objects. We enable material-aware 3D shape analysis by employing a projective convolutional neural network architecture to learn material-aware descriptors from view-based representations of 3D points for point-wise material classification or material-aware retrieval. Unfortunately, only a small fraction of shapes in 3D repositories are labeled with physical mate-rials, posing a challenge for learning methods. To address this challenge, we crowdsource a dataset of30803D shapes with part-wise material labels. We focus on furniture models which exhibit interesting structure and material variability. In addition, we also contribute a high-quality expert-labeled benchmark of115shapes from Herman-Miller andIKEA for evaluation. We further apply a mesh-aware conditional random field, which incorporates rotational and reflective symmetries, to smooth our local material predictions across neighboring surface patches. We demonstrate the effectiveness of our learned descriptors for automatic texturing, material-aware retrieval, and physical simulation.
