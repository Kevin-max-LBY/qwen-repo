<?php
/**
 * 研究页面 - 时空图神经网络
 */

$pageTitle = "研究 - 时空图神经网络";
$current_page = 'research';

include 'includes/header.php';
?>

<section class="hero hero-small">
    <div class="container">
        <h1>前沿研究</h1>
        <p class="subtitle">探索时空图神经网络的最新进展与开放问题</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <h2>热门研究方向</h2>
        <div class="grid-3">
            <div class="card research-card">
                <div class="card-icon">🧠</div>
                <h3>动态图学习</h3>
                <p>研究如何有效建模随时间演变的图结构，包括节点和边的动态变化。关键技术包括动态图嵌入、时序图注意力机制等。</p>
                <div class="research-tags">
                    <span class="tag">Dynamic Graphs</span>
                    <span class="tag">Temporal Embedding</span>
                </div>
            </div>
            
            <div class="card research-card">
                <div class="card-icon">⚡</div>
                <h3>高效计算优化</h3>
                <p>针对大规模图和长序列的计算挑战，研究稀疏化、采样、分布式训练等加速技术。</p>
                <div class="research-tags">
                    <span class="tag">Scalability</span>
                    <span class="tag">Efficiency</span>
                </div>
            </div>
            
            <div class="card research-card">
                <div class="card-icon">🔮</div>
                <h3>预测不确定性量化</h3>
                <p>开发概率模型和贝叶斯方法，为 ST-GNN 预测提供置信度估计，支持风险敏感型决策。</p>
                <div class="research-tags">
                    <span class="tag">Uncertainty</span>
                    <span class="tag">Probabilistic</span>
                </div>
            </div>
            
            <div class="card research-card">
                <div class="card-icon">🌐</div>
                <h3>跨域迁移学习</h3>
                <p>研究如何将模型从一个城市或领域迁移到另一个，解决数据稀缺场景下的应用问题。</p>
                <div class="research-tags">
                    <span class="tag">Transfer Learning</span>
                    <span class="tag">Domain Adaptation</span>
                </div>
            </div>
            
            <div class="card research-card">
                <div class="card-icon">🔍</div>
                <h3>可解释性与可视化</h3>
                <p>开发解释 ST-GNN 决策过程的方法，识别关键的时空模式和影响因素。</p>
                <div class="research-tags">
                    <span class="tag">Explainability</span>
                    <span class="tag">Visualization</span>
                </div>
            </div>
            
            <div class="card research-card">
                <div class="card-icon">🤖</div>
                <h3>自监督与预训练</h3>
                <p>利用大量未标注数据进行预训练，学习通用的时空表示，提升下游任务性能。</p>
                <div class="research-tags">
                    <span class="tag">Self-Supervised</span>
                    <span class="tag">Pre-training</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-alt">
    <div class="container">
        <h2>经典论文推荐</h2>
        <div class="paper-list">
            <div class="paper-item">
                <div class="paper-year">2018</div>
                <div class="paper-content">
                    <h3>Diffusion Convolutional Recurrent Neural Network for Data-driven Traffic Forecasting</h3>
                    <p class="paper-authors">Yaguang Li, Rose Yu, Cyrus Shahabi, Yan Liu (ICLR 2018)</p>
                    <p class="paper-abstract">提出 DCRNN 模型，将扩散图卷积与循环神经网络结合，在交通流量预测任务上取得 SOTA 结果。</p>
                    <div class="paper-links">
                        <a href="#" class="paper-link">📄 PDF</a>
                        <a href="#" class="paper-link">💻 Code</a>
                        <a href="#" class="paper-link">📊 Dataset</a>
                    </div>
                </div>
            </div>
            
            <div class="paper-item">
                <div class="paper-year">2018</div>
                <div class="paper-content">
                    <h3>Spatio-Temporal Graph Convolutional Networks for Skeleton-Based Action Recognition</h3>
                    <p class="paper-authors">Sijie Yan, Yuanjun Xiong, Dahua Lin (AAAI 2018)</p>
                    <p class="paper-abstract">提出 ST-GCN 模型，首次将时空图卷积应用于骨架动作识别，开创了该领域的新方向。</p>
                    <div class="paper-links">
                        <a href="#" class="paper-link">📄 PDF</a>
                        <a href="#" class="paper-link">💻 Code</a>
                    </div>
                </div>
            </div>
            
            <div class="paper-item">
                <div class="paper-year">2019</div>
                <div class="paper-content">
                    <h3>Graph WaveNet for Deep Spatial-Temporal Graph Modeling</h3>
                    <p class="paper-authors">Zonghan Wu, Shirui Pan, et al. (IJCAI 2019)</p>
                    <p class="paper-abstract">提出 Graph WaveNet，结合自适应图学习和扩张卷积，无需预定义图结构即可学习空间依赖。</p>
                    <div class="paper-links">
                        <a href="#" class="paper-link">📄 PDF</a>
                        <a href="#" class="paper-link">💻 Code</a>
                    </div>
                </div>
            </div>
            
            <div class="paper-item">
                <div class="paper-year">2020</div>
                <div class="paper-content">
                    <h3>Connecting the Dots: Multivariate Time Series Forecasting with Graph Neural Networks</h3>
                    <p class="paper-authors">Zonghan Wu, Shirui Pan, et al. (KDD 2020)</p>
                    <p class="paper-abstract">提出 MTGNN 框架，支持多任务学习，自动学习变量间的依赖关系图。</p>
                    <div class="paper-links">
                        <a href="#" class="paper-link">📄 PDF</a>
                        <a href="#" class="paper-link">💻 Code</a>
                    </div>
                </div>
            </div>
            
            <div class="paper-item">
                <div class="paper-year">2021</div>
                <div class="paper-content">
                    <h3>Spatial-Temporal Transformer Networks for Traffic Flow Forecasting</h3>
                    <p class="paper-authors">Jiahua Wang, et al. (arXiv 2021)</p>
                    <p class="paper-abstract">将 Transformer 架构引入时空预测任务，利用自注意力机制捕捉长程依赖。</p>
                    <div class="paper-links">
                        <a href="#" class="paper-link">📄 PDF</a>
                        <a href="#" class="paper-link">💻 Code</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <h2>开放数据集</h2>
        <div class="dataset-grid">
            <div class="dataset-card">
                <h3>🚦 PEMS-BAY</h3>
                <p>加州高速公路交通数据，包含 325 个传感器 4 个月的流量、速度信息。</p>
                <span class="dataset-meta">325 节点 | 52,116 时间步</span>
            </div>
            <div class="dataset-card">
                <h3>🚦 METR-LA</h3>
                <p>洛杉矶高速公路交通数据，包含 207 个传感器的实时交通信息。</p>
                <span class="dataset-meta">207 节点 | 34,272 时间步</span>
            </div>
            <div class="dataset-card">
                <h3>🌤️ WeatherBench</h3>
                <p>全球气象预报基准数据集，包含多种气象变量的网格化数据。</p>
                <span class="dataset-meta">全球网格 | 多种变量</span>
            </div>
            <div class="dataset-card">
                <h3>👥 Social Network</h3>
                <p>社交媒体用户互动数据，包含用户关系和内容传播信息。</p>
                <span class="dataset-meta">动态图 | 多模态</span>
            </div>
        </div>
    </div>
</section>

<style>
.research-card {
    text-align: left;
}

.research-tags {
    margin-top: 1rem;
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
}

.tag {
    background: var(--bg-light);
    color: var(--primary-color);
    padding: 0.25rem 0.75rem;
    border-radius: 20px;
    font-size: 0.75rem;
    font-weight: 600;
}

.paper-list {
    max-width: 900px;
    margin: 0 auto;
}

.paper-item {
    display: flex;
    gap: 1.5rem;
    padding: 1.5rem;
    background: var(--bg-white);
    border-radius: 10px;
    margin-bottom: 1.5rem;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.paper-year {
    font-size: 1.5rem;
    font-weight: bold;
    color: var(--primary-color);
    min-width: 80px;
    text-align: center;
}

.paper-content h3 {
    margin-bottom: 0.5rem;
    color: var(--text-dark);
}

.paper-authors {
    color: var(--text-light);
    font-style: italic;
    margin-bottom: 0.5rem;
}

.paper-abstract {
    color: var(--text-dark);
    line-height: 1.6;
    margin-bottom: 1rem;
}

.paper-links {
    display: flex;
    gap: 1rem;
}

.paper-link {
    color: var(--primary-color);
    font-weight: 500;
}

.paper-link:hover {
    text-decoration: underline;
}

.dataset-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 1.5rem;
}

.dataset-card {
    background: var(--bg-white);
    padding: 1.5rem;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.dataset-card h3 {
    color: var(--primary-color);
    margin-bottom: 0.5rem;
}

.dataset-card p {
    color: var(--text-light);
    margin-bottom: 1rem;
}

.dataset-meta {
    display: inline-block;
    background: var(--bg-light);
    padding: 0.25rem 0.75rem;
    border-radius: 5px;
    font-size: 0.875rem;
    color: var(--text-dark);
    font-weight: 500;
}

@media (max-width: 768px) {
    .paper-item {
        flex-direction: column;
        gap: 0.5rem;
    }
    
    .paper-year {
        text-align: left;
    }
}
</style>

<?php include 'includes/footer.php'; ?>
