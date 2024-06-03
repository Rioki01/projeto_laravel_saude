<?php

namespace Database\Seeders;

use App\Models\Medico;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MedicoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(){
        
        
        Medico::create(['nome' => 'Arlete Lopes Figueiras', 'descricao' => 'Trabalha na area de Cardiologia', 'preco' => 'R$ 400.00', 'especialidade' => 'Cardiologista', 'cidade' => 'Guarapuava', 'bairro' => 'Alto da XV', 'numero' => '454' , 'rua' => 'Rua Duque de Caxias', 'imgUrl' => 'https://www.diariodoaco.com.br/images/noticias/57158/qX781Claudia_Marcucci_-_Gerente_de_RH_da_Campneus.jpg']);
        Medico::create(['nome' => 'Patrick Andrade Ximenes', 'descricao' => 'Trabalha na area de Oftalmologia', 'preco' => 'R$ 350.00', 'especialidade' => 'Oftalmologista', 'cidade' => 'Pinhão', 'bairro' => 'Centro', 'numero' => '254','rua' => 'Rua Trifon Hanycz', 'imgUrl' => 'https://st5.depositphotos.com/62628780/64836/i/1600/depositphotos_648366378-stock-photo-medical-serious-portrait-assertive-doctor.jpg']);
        Medico::create(['nome' => 'Simeia Mateus de Barros', 'descricao' => 'Trabalha na area de Ginecologia ', 'preco' => 'R$ 220.00', 'especialidade' => 'Ginecologista', 'cidade' => 'Guarapuava', 'bairro' => 'Boqueirao', 'numero' => '301','rua' => 'Rua São Jorge', 'imgUrl' => 'https://s2-epocanegocios.glbimg.com/Mx8YS0f3qHU-NVeEWtwDlmNchnA=/0x0:3000x2000/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_e536e40f1baf4c1a8bf1ed12d20577fd/internal_photos/bs/2023/A/6/GMOagnSfmCcnFupIOBig/liliane-rocha-ceo-e-fundadora-da-gestao-kairos-credito-nicola-labate-.jpg']);
        Medico::create(['nome' => 'João Batista Uchôa Rabelo', 'descricao' => 'Trabalha na area de Cirurgia Plástica', 'preco' => 'R$ 600.00', 'especialidade' => 'Cirurgia Plástica', 'cidade' => 'Prudentópolis', 'bairro' => 'Jardim Betania', 'numero' => '184','rua' => 'Rua Minas Gerais', 'imgUrl' => 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhvs7FjrqoSXwd87eti1JUfhwSnl_5SDCFzTKlM0j17RipHAqqxqdD9194OU0St87RmFdTbFBodJB80fu3xXJxLZCkLnEIWtvW_g0blmM8DcqW8_kJVssuphJJMxUjJdjYNKj_2nxbIkMQ/s1600/moda-para-m%25C3%25A9dicos-homens.jpg']);
        Medico::create(['nome' => 'Thainá Borralho Annunziato', 'descricao' => 'Trabalha na area de Cirurgia Plástica', 'preco' => 'R$ 450.00', 'especialidade' => 'Cirurgia Plástica', 'cidade' => 'Guarapuava', 'bairro' => 'Batel', 'numero' => '200','rua' => 'Rua Barbosa', 'imgUrl' => 'https://img.freepik.com/fotos-gratis/mulher-de-tiro-medio-trabalhando-como-medica_23-2150379198.jpg']);
        Medico::create(['nome' => 'Sueli Mendonça Cormack', 'descricao' => 'Trabalha na area de Nutrição', 'preco' => 'R$ 530.00', 'especialidade' => 'Nuticionista', 'cidade' => 'Irati', 'bairro' => 'Canisianas', 'numero' => '122','rua' => 'Rua Santos Dumond', 'imgUrl' => 'https://blog.portalpos.com.br/app/uploads/2021/03/studio-image-of-confident-attractive-middle-aged-female-doctor-with-short-dyed-hairstyle-posing-isolated-wearing-white-coat-and-stethoscope-min-1024x683.jpg']);
        Medico::create(['nome' => 'Paula Iara Coutinho', 'descricao' => 'Trabalha na area de Oftalmologia', 'preco' => 'R$ 350.00', 'especialidade' => 'Oftalmologista', 'cidade' => 'Ponta Grossa', 'bairro' => 'Boa Vista', 'numero' => '101','rua' => 'Rua Treze de Maio', 'imgUrl' => 'https://static.wikia.nocookie.net/celebridades/images/1/15/Qual-medico-e-indicado-para-o-tratamento-da-covid-imed.jpg/revision/latest?cb=20240108233749&path-prefix=pt-br']);
        Medico::create(['nome' => 'Ana Cristina Bastida Constantino', 'descricao' => 'Trabalha na area de Nutrição', 'preco' => 'R$ 350.00', 'especialidade' => 'Nuticionista', 'cidade' => 'Guarapuava', 'bairro' => 'Centro ', 'numero' => '203','rua' => 'Rua Dez', 'imgUrl' => 'https://www.omaispositivo.com.br/wp-content/uploads/2019/12/DSC_0960.jpg']);
        Medico::create(['nome' => 'Cristiano Jesus Bandeira', 'descricao' => 'Trabalha na area de Cardiologia', 'preco' => 'R$ 400.00', 'especialidade' => 'Cardiologista', 'cidade' => 'Guarapuava', 'bairro' => 'Alto da XV', 'numero' => '454' , 'rua' => 'Rua Duque de Caxias', 'imgUrl' => 'https://img.freepik.com/fotos-gratis/close-no-medico-se-preparando-para-o-trabalho_23-2149152494.jpg']);
        Medico::create(['nome' => 'Franciele Guzzo Miranda', 'descricao' => 'Trabalha na area de Nutrição', 'preco' => 'R$ 350.00', 'especialidade' => 'Nuticionista', 'cidade' => 'Pinhão', 'bairro' => 'Centro', 'numero' => '254','rua' => 'Rua Trifon Hanycz', 'imgUrl' => 'https://img.freepik.com/fotos-gratis/close-no-medico-se-preparando-para-o-trabalho_23-2149152501.jpg']);
        Medico::create(['nome' => 'Evelyn Cristo da Paixão', 'descricao' => 'Trabalha na area de Ginecologia ', 'preco' => 'R$ 220.00', 'especialidade' => 'Ginecologista', 'cidade' => 'Guarapuava', 'bairro' => 'Boqueirao', 'numero' => '301','rua' => 'Rua São Jorge', 'imgUrl' => 'https://img.cancaonova.com/cnimages/canais/uploads/sites/6/2014/11/formacao_1600x1200-uma-mulher-virtuosa-e-feita-de-esforcos.jpg']);
        Medico::create(['nome' => 'Maria Adelia da Silva Baesso', 'descricao' => 'Trabalha na area de Nutrição', 'preco' => 'R$ 600.00', 'especialidade' => 'Nuticionista', 'cidade' => 'Prudentópolis', 'bairro' => 'Jardim Betania', 'numero' => '184','rua' => 'Rua Minas Gerais', 'imgUrl' => 'https://cdn.shopify.com/s/files/1/0469/4500/9826/files/Thais_Roque_81b86e9d-e8c0-43bd-b6ae-f93125d77db3.jpg?v=1709668911']);
        Medico::create(['nome' => 'Marcelle Faria Cavalcanti', 'descricao' => 'Trabalha na area de Neurologia', 'preco' => 'R$ 450.00', 'especialidade' => 'Neurologista', 'cidade' => 'Guarapuava', 'bairro' => 'Batel', 'numero' => '200','rua' => 'Rua Barbosa', 'imgUrl' => 'https://media.istockphoto.com/id/1326417862/pt/foto/young-woman-laughing-while-relaxing-at-home.jpg?b=1&s=612x612&w=0&k=20&c=5Zk9V33BwjYsbvoVtNEuPs3xiI64bvTuNSKFPKTq0f0=']);
        Medico::create(['nome' => 'Valmir Martins Meyer', 'descricao' => 'Trabalha na area de Clínico Geral', 'preco' => 'R$ 530.00', 'especialidade' => 'Clínico Geral', 'cidade' => 'Irati', 'bairro' => 'Canisianas', 'numero' => '122','rua' => 'Rua Santos Dumond', 'imgUrl' => 'https://img.freepik.com/fotos-gratis/homem-bonito-posando-e-sorrindo_23-2149396133.jpg?size=626&ext=jpg&ga=GA1.1.2082370165.1716595200&semt=ais_user']);
        Medico::create(['nome' => 'Elio Faria Coutinho', 'descricao' => 'Trabalha na area de Neurologia', 'preco' => 'R$ 350.00', 'especialidade' => 'Neurologista', 'cidade' => 'Ponta Grossa', 'bairro' => 'Boa Vista', 'numero' => '101','rua' => 'Rua Treze de Maio', 'imgUrl' => 'https://img.freepik.com/fotos-gratis/retrato-de-homem-feliz-e-sorridente_23-2149022620.jpg']);
        Medico::create(['nome' => 'Telmo Paiva Amorin', 'descricao' => 'Trabalha na area de Dentista', 'preco' => 'R$ 350.00', 'especialidade' => 'Dentista', 'cidade' => 'Guarapuava', 'bairro' => 'Centro ', 'numero' => '203','rua' => 'Rua Dez', 'imgUrl' => 'https://static.vecteezy.com/ti/fotos-gratis/t1/26843769-feliz-jovem-homem-retrato-com-moda-camisa-sorrir-em-estudio-fundo-ai-gerado-foto.jpeg']);



    }
}
