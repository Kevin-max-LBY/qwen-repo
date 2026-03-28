<?php
/**
 * 时空图神经网络 (Spatio-Temporal Graph Neural Networks) 主题网站
 * 首页
 */

$pageTitle = "时空图神经网络 - 首页";
$current_page = 'home';

include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <h1>时空图神经网络</h1>
        <p class="subtitle">Spatio-Temporal Graph Neural Networks</p>
        <p class="description">探索时间与空间维度下的图神经网络前沿技术</p>
        <a href="#introduction" class="btn btn-primary">开始学习</a>
    </div>
</section>

<!-- Introduction Section -->
<section id="introduction" class="section">
    <div class="container">
        <h2>什么是时空图神经网络？</h2>
        <div class="content-box">
            <p>时空图神经网络（ST-GNN）是一种深度学习模型，专门用于处理同时具有空间结构性和时间动态性的图数据。它结合了图神经网络（GNN）和序列模型的优势，能够捕捉数据中的时空依赖关系。</p>
            
            <h3>核心特点</h3>
            <ul>
                <li><strong>空间建模</strong>：通过图卷积操作捕捉节点间的空间依赖关系</li>
                <li><strong>时间建模</strong>：利用RNN、LSTM或时序卷积捕捉时间序列的动态变化</li>
                <li><strong>联合学习</strong>：同时优化空间和时间的特征表示</li>
            </ul>
        </div>
    </div>
</section>

<!-- Applications Section -->
<section id="applications" class="section section-alt">
    <div class="container">
        <h2>应用领域</h2>
        <div class="grid-3">
            <div class="card">
                <div class="card-icon">🚦</div>
                <h3>交通流量预测</h3>
                <p>预测城市道路网的交通流量、速度和拥堵情况，优化交通信号控制。</p>
            </div>
            <div class="card">
                <div class="card-icon">🌤️</div>
                <h3>气象预报</h3>
                <p>分析气象站网络数据，预测温度、降水、风速等气象要素的时空演变。</p>
            </div>
            <div class="card">
                <div class="card-icon">👥</div>
                <h3>社交网络分析</h3>
                <p>研究用户行为的时空模式，预测信息传播和用户互动趋势。</p>
            </div>
            <div class="card">
                <div class="card-icon">🏥</div>
                <h3>疾病传播预测</h3>
                <p>建模疾病在地理区域内的传播过程，支持疫情防控决策。</p>
            </div>
            <div class="card">
                <div class="card-icon">📊</div>
                <h3>金融时序分析</h3>
                <p>分析股票、加密货币等金融资产的关联性和价格波动。</p>
            </div>
            <div class="card">
                <div class="card-icon">🏙️</div>
                <h3>智慧城市</h3>
                <p>整合城市多源传感器数据，优化资源分配和城市管理。</p>
            </div>
        </div>
    </div>
</section>

<!-- Key Models Section -->
<section id="models" class="section">
    <div class="container">
        <h2>经典模型架构</h2>
        <div class="timeline">
            <div class="timeline-item">
                <div class="timeline-marker">2018</div>
                <div class="timeline-content">
                    <h3>DCRNN (Diffusion Convolutional RNN)</h3>
                    <p>将扩散图卷积与循环神经网络结合，用于交通流量预测。</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-marker">2018</div>
                <div class="timeline-content">
                    <h3>ST-GCN (Spatio-Temporal GCN)</h3>
                    <p>提出时空同步卷积模块，在骨架动作识别任务中取得突破。</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-marker">2019</div>
                <div class="timeline-content">
                    <h3>Graph WaveNet</h3>
                    <p>结合自适应图学习和扩张卷积，无需预定义图结构。</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-marker">2020</div>
                <div class="timeline-content">
                    <h3>MTGNN (Multi-Task Learning GNN)</h3>
                    <p>支持多任务学习的时空图神经网络框架。</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Resources Section -->
<section id="resources" class="section section-alt">
    <div class="container">
        <h2>学习资源</h2>
        <div class="resource-list">
            <div class="resource-item">
                <h3>📚 论文推荐</h3>
                <ul>
                    <li><a href="#">"Diffusion Convolutional Recurrent Neural Network for Data-driven Traffic Forecasting"</a></li>
                    <li><a href="#">"Spatio-Temporal Graph Convolutional Networks for Skeleton-Based Action Recognition"</a></li>
                    <li><a href="#">"Graph WaveNet for Deep Spatial-Temporal Graph Modeling"</a></li>
                </ul>
            </div>
            <div class="resource-item">
                <h3>💻 代码实现</h3>
                <ul>
                    <li><a href="#">PyTorch Geometric Temporal</a> - 时空图神经网络库</li>
                    <li><a href="#">DGL-LifeSci</a> - 深度图生命周期科学库</li>
                    <li><a href="#">TensorFlow GNN</a> - TensorFlow图神经网络</li>
                </ul>
            </div>
            <div class="resource-item">
                <h3>🎓 教程课程</h3>
                <ul>
                    <li><a href="#">斯坦福CS224W: 图机器学习</a></li>
                    <li><a href="#">MIT 6.S099: 图神经网络</a></li>
                    <li><a href="#">Coursera: 图神经网络专项课程</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
