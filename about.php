<?php
/**
 * 关于页面 - 时空图神经网络
 */

$pageTitle = "关于 - 时空图神经网络";
$current_page = 'about';

include 'includes/header.php';
?>

<section class="hero hero-small">
    <div class="container">
        <h1>关于时空图神经网络</h1>
        <p class="subtitle">深入了解 ST-GNN 的核心概念与发展历程</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="content-box">
            <h2>什么是图神经网络？</h2>
            <p>图神经网络（Graph Neural Networks, GNN）是一类直接在图结构数据上操作的深度学习模型。与传统神经网络处理欧几里得空间数据（如图像、文本）不同，GNN 能够处理非欧几里得空间的图结构数据，广泛应用于社交网络、知识图谱、分子结构等领域。</p>
            
            <h2>为什么需要时空建模？</h2>
            <p>在现实世界中，许多系统同时具有空间结构和时间动态性。例如：</p>
            <ul>
                <li>交通网络中的车流量随时间和路段变化</li>
                <li>气象系统中各站点的数据随时空演变</li>
                <li>社交网络中用户关系的动态变化</li>
            </ul>
            <p>传统的 GNN 只能捕捉空间依赖，而 RNN/LSTM 只能处理时间序列。时空图神经网络将两者结合，能够同时建模空间和时间的复杂关系。</p>
            
            <h2>技术架构</h2>
            <p>典型的 ST-GNN 架构包含以下组件：</p>
            <ul>
                <li><strong>空间编码器</strong>：使用图卷积（GCN）、图注意力（GAT）等提取空间特征</li>
                <li><strong>时间编码器</strong>：使用 RNN、LSTM、GRU 或时序卷积捕捉时间模式</li>
                <li><strong>融合模块</strong>：整合时空特征，生成最终表示</li>
                <li><strong>预测头</strong>：根据任务需求输出预测结果</li>
            </ul>
        </div>
    </div>
</section>

<section class="section section-alt">
    <div class="container">
        <h2>发展历程</h2>
        <div class="timeline">
            <div class="timeline-item">
                <div class="timeline-marker">2013</div>
                <div class="timeline-content">
                    <h3>图神经网络萌芽</h3>
                    <p>Scarselli 等人首次提出图神经网络的递归架构。</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-marker">2016</div>
                <div class="timeline-content">
                    <h3>图卷积网络 (GCN)</h3>
                    <p>Kipf & Welling 提出高效的图卷积网络，推动 GNN 研究热潮。</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-marker">2018</div>
                <div class="timeline-content">
                    <h3>时空 GNN 兴起</h3>
                    <p>DCRNN、ST-GCN 等开创性工作将 GNN 应用于时空预测任务。</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-marker">2019-2020</div>
                <div class="timeline-content">
                    <h3>自适应图学习</h3>
                    <p>Graph WaveNet、MTGNN 等工作开始学习隐式的图结构。</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-marker">2021-至今</div>
                <div class="timeline-content">
                    <h3>Transformer 融合</h3>
                    <p>将 Transformer 架构与 GNN 结合，探索更强大的时空建模能力。</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <h2>核心挑战</h2>
        <div class="grid-3">
            <div class="card">
                <h3>动态图结构</h3>
                <p>如何处理随时间变化的图结构，如社交网络中的新增/删除边。</p>
            </div>
            <div class="card">
                <h3>长程依赖</h3>
                <p>捕捉长时间跨度的时间依赖和远距离节点间的空间依赖。</p>
            </div>
            <div class="card">
                <h3>计算效率</h3>
                <p>大规模图数据和长序列带来的计算和存储挑战。</p>
            </div>
            <div class="card">
                <h3>多尺度建模</h3>
                <p>同时捕捉局部和全局的时空模式。</p>
            </div>
            <div class="card">
                <h3>可解释性</h3>
                <p>理解模型如何做出预测，识别关键的时空模式。</p>
            </div>
            <div class="card">
                <h3>迁移学习</h3>
                <p>将在一个场景学习的模型迁移到新的城市或领域。</p>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
