CREATE DATABASE IF NOT EXISTS testimonials_system;
USE testimonials_system;

CREATE TABLE IF NOT EXISTS testimonials (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    company VARCHAR(50),
    email VARCHAR(50) NOT NULL,
    message TEXT NOT NULL,
    rating INT NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO testimonials (name, company, email, message, rating, created_at) VALUES
('Ana Pereira', 'SoftTech', 'ana@email.com', 'Atendimento excelente e rápido!', 5, '2024-01-12 14:20:00'),
('Bruno Costa', 'Mega Solutions', 'bruno@email.com', 'Equipe muito atenciosa e qualificada.', 4, '2024-01-11 16:10:00'),
('Carla Mendes', 'InfoTech', 'carla@email.com', 'Gostei bastante do suporte oferecido.', 5, '2024-01-10 08:45:00'),
('Daniel Souza', 'Web Innovators', 'daniel@email.com', 'Empresa séria e comprometida.', 5, '2024-01-09 13:30:00'),
('Eduarda Lima', 'Fast Solutions', 'eduarda@email.com', 'Muito satisfeita com os resultados!', 4, '2024-01-08 09:15:00'),
('Fernando Rocha', 'Tech Global', 'fernando@email.com', 'Entrega rápida e eficiente.', 5, '2024-01-07 11:50:00'),
('Gabriela Nunes', 'Digital Experts', 'gabriela@email.com', 'Serviço de altíssima qualidade.', 5, '2024-01-06 15:25:00'),
('Henrique Alves', 'Smart Systems', 'henrique@email.com', 'Ótima experiência, recomendo!', 4, '2024-01-05 10:40:00'),
('Isabela Duarte', 'Vision Tech', 'isabela@email.com', 'Atendimento super rápido!', 5, '2024-01-04 14:00:00'),
('João Batista', 'NextGen', 'joao.b@email.com', 'Equipe extremamente profissional.', 5, '2024-01-03 17:20:00'),
('Karen Fonseca', 'Inova Web', 'karen@email.com', 'Muito satisfeita com o trabalho realizado.', 4, '2024-01-02 12:15:00'),
('Leonardo Campos', 'CodeX', 'leonardo@email.com', 'Empresa muito confiável.', 5, '2024-01-01 18:45:00'),
('Mariana Lopes', 'Tech Experts', 'mariana@email.com', 'Altamente recomendável!', 5, '2023-12-31 09:30:00'),
('Nelson Ribeiro', 'SoftHub', 'nelson@email.com', 'Ótima relação custo-benefício.', 4, '2023-12-30 14:10:00'),
('Olívia Figueiredo', 'Dev Masters', 'olivia@email.com', 'Resultados acima do esperado!', 5, '2023-12-29 11:20:00'),
('Paulo César', 'IT Solutions', 'paulo@email.com', 'Empresa muito responsável.', 5, '2023-12-28 16:40:00'),
('Raquel Menezes', 'CyberTech', 'raquel@email.com', 'Atendimento impecável!', 5, '2023-12-27 13:10:00'),
('Sérgio Andrade', 'Future Web', 'sergio@email.com', 'Profissionalismo de ponta a ponta.', 5, '2023-12-26 10:00:00'),
('Tatiane Castro', 'DataCorp', 'tatiane@email.com', 'Estou muito impressionada com a qualidade.', 4, '2023-12-25 15:30:00'),
('Ulisses Vieira', 'WebNet', 'ulisses@email.com', 'Atendimento rápido e eficiente.', 5, '2023-12-24 12:50:00'),
('Vanessa Martins', 'HighTech', 'vanessa@email.com', 'Super recomendo esta empresa!', 5, '2023-12-23 17:10:00'),
('William Souza', 'Digital Mind', 'william@email.com', 'Melhor serviço que já utilizei.', 5, '2023-12-22 09:40:00'),
('Xavier Farias', 'TechWave', 'xavier@email.com', 'Muito comprometidos com o cliente.', 4, '2023-12-21 14:55:00'),
('Yasmin Costa', 'CloudTech', 'yasmin@email.com', 'Altamente profissionais!', 5, '2023-12-20 11:45:00'),
('Zélia Barreto', 'InovaTI', 'zelia@email.com', 'Serviço nota 10!', 5, '2023-12-19 16:25:00'),
('Arthur Mendes', 'Smart Solutions', 'arthur@email.com', 'Ótima equipe, super dedicada.', 4, '2023-12-18 13:35:00'),
('Beatriz Almeida', 'NextLevel', 'beatriz@email.com', 'Adorei o serviço prestado.', 5, '2023-12-17 10:20:00'),
('Caio Rocha', 'Data Experts', 'caio@email.com', 'Muito eficientes e rápidos.', 5, '2023-12-16 15:00:00'),
('Diana Luz', 'IT Hub', 'diana@email.com', 'Trabalho impecável!', 5, '2023-12-15 12:30:00'),
('Eduardo Martins', 'SoftCloud', 'eduardo@email.com', 'Sempre entregam o prometido.', 4, '2023-12-14 17:40:00'),
('Fabiana Nunes', 'TechPros', 'fabiana@email.com', 'Melhor empresa do ramo!', 5, '2023-12-13 09:15:00'),
('Gustavo Silveira', 'Web Innovators', 'gustavo@email.com', 'Ótima parceria de negócios.', 5, '2023-12-12 14:20:00'),
('Helena Mendes', 'Fast IT', 'helena@email.com', 'Profissionais muito experientes.', 4, '2023-12-11 11:55:00'),
('Igor Santos', 'Cloud Innovators', 'igor@email.com', 'Suporte excelente!', 5, '2023-12-10 16:10:00'),
('Jéssica Ribeiro', 'IT Next', 'jessica@email.com', 'Satisfeita com o serviço prestado.', 5, '2023-12-09 13:00:00'),
('Lucas Almeida', 'Vision Data', 'lucas@email.com', 'Recomendo a todos!', 5, '2023-12-08 10:30:00'),
('Mônica Freitas', 'DataTech', 'monica@email.com', 'Muito comprometidos e ágeis.', 4, '2023-12-07 15:45:00');

-- Adicione mais 12 registros com datas diferentes...