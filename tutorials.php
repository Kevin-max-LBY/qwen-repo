<?php
/**
 * 教程页面 - 时空图神经网络
 */

$pageTitle = "教程 - 时空图神经网络";
$current_page = 'tutorials';

include 'includes/header.php';
?>

<section class="hero hero-small">
    <div class="container">
        <h1>学习教程</h1>
        <p class="subtitle">从入门到精通的完整学习路径</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <h2>入门教程</h2>
        <div class="tutorial-list">
            <div class="tutorial-item">
                <div class="tutorial-badge">初级</div>
                <h3>第一部分：图神经网络基础</h3>
                <ul>
                    <li>图的基本概念与表示</li>
                    <li>图卷积网络 (GCN) 原理</li>
                    <li>图注意力网络 (GAT) 详解</li>
                    <li>实践：使用 PyTorch Geometric 构建 GCN</li>
                </ul>
                <a href="#" class="btn btn-primary">开始学习</a>
            </div>
            
            <div class="tutorial-item">
                <div class="tutorial-badge">初级</div>
                <h3>第二部分：时间序列建模</h3>
                <ul>
                    <li>RNN、LSTM、GRU 基础</li>
                    <li>时序卷积网络 (TCN)</li>
                    <li>Transformer 在时序中的应用</li>
                    <li>实践：交通流量预测 baseline</li>
                </ul>
                <a href="#" class="btn btn-primary">开始学习</a>
            </div>
            
            <div class="tutorial-item">
                <div class="tutorial-badge">中级</div>
                <h3>第三部分：时空图神经网络入门</h3>
                <ul>
                    <li>ST-GNN 的基本架构</li>
                    <li>DCRNN 模型详解与实现</li>
                    <li>ST-GCN 模型详解与实现</li>
                    <li>实践：构建你的第一个 ST-GNN</li>
                </ul>
                <a href="#" class="btn btn-primary">开始学习</a>
            </div>
        </div>
    </div>
</section>

<section class="section section-alt">
    <div class="container">
        <h2>进阶教程</h2>
        <div class="tutorial-list">
            <div class="tutorial-item">
                <div class="tutorial-badge">中级</div>
                <h3>第四部分：高级模型架构</h3>
                <ul>
                    <li>Graph WaveNet 自适应图学习</li>
                    <li>MTGNN 多任务学习框架</li>
                    <li>AGCRN 自适应图卷积 RNN</li>
                    <li>实践：对比不同模型性能</li>
                </ul>
                <a href="#" class="btn btn-primary">开始学习</a>
            </div>
            
            <div class="tutorial-item">
                <div class="tutorial-badge">高级</div>
                <h3>第五部分：Transformer 与 GNN 融合</h3>
                <ul>
                    <li>Spatial-Temporal Transformer</li>
                    <li>Graph Transformer 架构</li>
                    <li>Attention 机制在 ST-GNN 中的应用</li>
                    <li>实践：实现 ST-Transformer</li>
                </ul>
                <a href="#" class="btn btn-primary">开始学习</a>
            </div>
            
            <div class="tutorial-item">
                <div class="tutorial-badge">高级</div>
                <h3>第六部分：实战项目</h3>
                <ul>
                    <li>城市交通流量预测系统</li>
                    <li>气象预报模型开发</li>
                    <li>疫情传播预测分析</li>
                    <li>部署与优化最佳实践</li>
                </ul>
                <a href="#" class="btn btn-primary">开始学习</a>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <h2>代码示例</h2>
        <div class="code-examples">
            <div class="code-card">
                <h3>🔧 DCRNN 实现示例</h3>
                <pre><code>class DCRNN(nn.Module):
    def __init__(self, num_nodes, input_dim, hidden_dim):
        super().__init__()
        self.graph_conv = DiffusionGraphConv(num_nodes, input_dim, hidden_dim)
        self.gru = nn.GRUCell(hidden_dim, hidden_dim)
    
    def forward(self, x, adj_matrix):
        # x: [batch, time, nodes, features]
        batch_size, seq_len, _, _ = x.shape
        hidden = torch.zeros(batch_size, self.hidden_dim)
        
        for t in range(seq_len):
            x_t = x[:, t, :, :].reshape(batch_size, -1)
            graph_feat = self.graph_conv(x_t, adj_matrix)
            hidden = self.gru(graph_feat, hidden)
        
        return hidden</code></pre>
            </div>
            
            <div class="code-card">
                <h3>🔧 ST-GCN 实现示例</h3>
                <pre><code>class STGCNBlock(nn.Module):
    def __init__(self, in_channels, out_channels):
        super().__init__()
        self.temporal_conv = nn.Conv2d(in_channels, out_channels, 
                                        kernel_size=(3, 1))
        self.spatial_gcn = GraphConvolution(out_channels, out_channels)
        self.batch_norm = nn.BatchNorm2d(out_channels)
    
    def forward(self, x, adj):
        # x: [batch, channels, time, nodes]
        x = self.temporal_conv(x)
        x = x.permute(0, 2, 3, 1)  # [batch, time, nodes, channels]
        x = self.spatial_gcn(x, adj)
        x = x.permute(0, 3, 1, 2)
        x = self.batch_norm(x)
        return F.relu(x)</code></pre>
            </div>
        </div>
    </div>
</section>

<style>
.tutorial-list {
    display: grid;
    gap: 2rem;
}

.tutorial-item {
    background: var(--bg-white);
    padding: 2rem;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border-left: 4px solid var(--primary-color);
}

.tutorial-badge {
    display: inline-block;
    padding: 0.25rem 0.75rem;
    background: var(--primary-color);
    color: white;
    border-radius: 20px;
    font-size: 0.875rem;
    margin-bottom: 1rem;
}

.tutorial-item h3 {
    margin-bottom: 1rem;
    color: var(--text-dark);
}

.tutorial-item ul {
    list-style: disc;
    padding-left: 1.5rem;
    margin-bottom: 1.5rem;
}

.tutorial-item li {
    margin-bottom: 0.5rem;
    color: var(--text-light);
}

.code-examples {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(500px, 1fr));
    gap: 2rem;
}

.code-card {
    background: var(--bg-white);
    padding: 1.5rem;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.code-card h3 {
    margin-bottom: 1rem;
    color: var(--primary-color);
}

.code-card pre {
    background: #1e1e1e;
    color: #d4d4d4;
    padding: 1rem;
    border-radius: 5px;
    overflow-x: auto;
    font-family: 'Consolas', 'Monaco', monospace;
    font-size: 0.875rem;
    line-height: 1.5;
}

@media (max-width: 768px) {
    .code-examples {
        grid-template-columns: 1fr;
    }
}
</style>

<?php include 'includes/footer.php'; ?>
