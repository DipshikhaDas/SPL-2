<?php

namespace Database\Seeders;

use App\Models\Faculty;
use App\Models\Journal;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;

class SomethingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'John Doe',
            'email' => 'john@john.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            // 'remember_token' => Str::random(10),
        ]);
        $user->assignRole('journalAdmin', 'editor', 'author', 'reviewer', 'superAdmin');

        $editor = User::create([
            'name' => 'Random Editor',
            'email' => 'editor@editor.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            // 'remember_token' => Str::random(10),
        ]);
        $editor->assignRole('journalAdmin', 'editor', 'author', 'reviewer', 'superAdmin');


        $faculty = Faculty::create([
            'name' => 'Engineering Faculty',
        ]);

        // $faculty->journalAdmins()->saveMany($user->id);
        $user->faculties()->sync([$faculty->id]);

        $imagePath = getenv('HOME') . '/test.jpeg';
        $fileContents = file_get_contents($imagePath);
        $fileName = basename($imagePath);

        $journal = Journal::create([
            'title' => 'International Journal of Minerals, Metallurgy and Materials',
            'description' => '<p>International Journal of Minerals, Metallurgy and Materials (formerly known as Journal of University of Science and Technology Beijing) is an international journal devoted to publishing original research articles (and occasional invited reviews) on all aspects of minerals processing, physical metallurgy, process metallurgy, and materials science and processing. Coverage is well-rounded from minerals characterization and developments in extraction to the fabrication and performance of materials. The journal welcomes articles on the relationships among the processing, structure and properties of minerals, metals, and materials. Specific areas of interest are nano materials, new metallic materials, advanced ceramics, metallic matrix composites, functional materials and more.</p>
            
                <ul><li>Formerly known as Journal of University of Science and Technology Beijing: Mineral, Metallurgy, Material </li><li>Explores the relationships among the processing, structure and properties of minerals, metals, and materials </li><li>Covers a range of topics from minerals characterization and developments in extraction to the fabrication and performance of materials</li></ul>',
            'aims_and_scope' => '<p><i>International Journal of Minerals, Metallurgy and Materials</i> (Formerly known as <i>Journal of University of Science and Technology Beijing, Mineral, Metallurgy, Material</i>) provides an international medium for the publication of theoretical and experimental studies related to the fields of Minerals, Metallurgy and Materials. Papers dealing with minerals processing, mining, mine safety, environmental pollution and protection of mines, process metallurgy, metallurgical physical chemistry, structure and physical properties of materials, corrosion and resistance of materials, are viewed as suitable for publication.  </p>',

            'author_guideline' => ' <ul>' .
            '<li> one </li>' .
            '<li> two </li>' .
            '</ul>',

            'editorial_board' => "<p><strong>Editors</strong><br>
<strong>Editorial Board</strong><br>
<strong>Editor-in-Chief</strong><br>
Aixiang Wu, University of Science and Technology Beijing, China<br>
<strong>Executive Editor-in-Chief</strong><br>
Konrad Świerczek, AGH University of Science and Technology, Poland<br>
<strong>Vice Editors-in-Chief</strong><br>
Shuqiang Jiao, University of Science and Technology Beijing, China<br>
Longzhe Jin, University of Science and Technology Beijing, China<br>
Zhaoping Lü, University of Science and Technology Beijing, China<br>
Luning Wang, University of Science and Technology Beijing, China<br>
Chris Aldrich, Curtin University, Australia<br>
Hongbiao Dong, University of Leicester, UK<br>
Sanjay Mathur, University of Cologne, Germany<br>
Dieter G. Senk, RWTH Aachen University, Germany<br>
Wei Jiang, University of Science and Technology Beijing, China<br>
<strong>Advisory Members</strong><br>
Meifeng Cai, University of Science and Technology Beijing, China<br>
Kuo-Chih Chou, University of Science and Technology Beijing, China<br>
Changchun Ge, University of Science and Technology Beijing, China<br>
Zhenghuan Hu, University of Science and Technology Beijing, China<br>
Xiaowei Huang, General Research Institute for Nonferrous Metals, China<br>
Tao Jiang, Central South University, China<br>
Xinping Mao, University of Science and Technology Beijing, China<br>
Zuoren Nie, Beijing University of Technology, China<br>
Fusheng Pan, Chongqing University, China<br>
Suping Peng, China University of Mining and Technology (Beijing), China<br>
Guanzhou Qiu, Central South University, China<br>
Haizhou Wang, China Iron &amp; Steel Research Institute Group, China<br>
Yide Wang, Taiyuan Iron &amp; Steel (Group) Co., Ltd., China<br>
Qiang Wu, China University of Mining and Technology (Beijing), China<br>
Heping Xie, Sichuan University, China<br>
Jianxin Xie, University of Science and Technology Beijing, China<br>
Huibin Xu, Beihang University, China<br>
Huaming Yang, Central South University, China<br>
Renshu Yang, University of Science and Technology Beijing, China<br>
Hengqiang Ye, Institute of Metal Research, Chinese Academy of Sciences, China<br>
Qingrui Yue, University of Science and Technology Beijing, China<br>
Tongyi Zhang, Shanghai University, China<br>
Yue Zhang, University of Science and Technology Beijing, China<br>
Ji Zhou, Tsinghua University, China<br>
Hans Fecht, Ulm University, Germany<br>
Jian Lü, City University of Hong Kong, Hong Kong, China<br>
Jingli Luo, University of Alberta, Canada<br>
D.R. Nagaraj, Solvay S.A., USA<br>
Hongbo Zeng, University of Alberta, Canada<br>
<strong>Members</strong><br>
Yang Bai, University of Science and Technology Beijing, China<br>
Yanping Bao, University of Science and Technology Beijing, China<br>
Guijun Bi, Guangdong Institute of Intilligent manufacturing, China<br>
Shuai Cao, University of Science and Technology Beijing, China<br>
Wenbin Cao, University of Science and Technology Beijing, China<br>
Jun Chen, University of Science and Technology Beijing, China<br>
Qiusong Chen, Central South University, China<br>
Ruirun Chen, Harbin Institute of Technology, China<br>
Mansheng Chu, Northeastern University, China<br>
Alberto N. Conejo, University of Science and Technology Beijing, China<br>
Chaofang Dong, University of Science and Technology Beijing, China<br>
Han Dong, Shanghai University, China<br>
Shuxiang Dong, Peking University, China<br>
Qicheng Feng, Kunming University of Science and Technology, China<br>
Qiang Feng, University of Science and Technology Beijing, China<br>
Xueyi Guo, Central South University, China<br>
Zhancheng Guo, University of Science and Technology Beijing, China<br>
Xueqiu He, University of Science and Technology Beijing, China<br>
Xinmei Hou, University of Science and Technology Beijing, China<br>
Nan Jia, Northeastern University, China<br>
Yong Jiang, University of Science and Technology Beijing, China<br>
Zhouhua Jiang, Northeastern University, China<br>
Bin Jiang, Chongqing University, China<br>
Chengbao Jiang, Beihang University, China<br>
Huazhe Jiao, Henan Polytechnic University, China<br>
Guozheng Kang, Southwest Jiaotong University, China<br>
Hongyi Li, Chongqing University, China<br>
Qian Li, Chongqing University, China<br>
Wenya Li, Northwestern Polytechnical University, China<br>
Xiaogang Li, University of Science and Technology Beijing, China<br>
Qingliang Liao, University of Science and Technology Beijing, China<br>
Hai Lin, University of Science and Technology Beijing, China<br>
Tung Chai Ling, Hunan University, China<br>
Fengqin Liu, University of Science and Technology Beijing, China<br>
Feng Liu, Northwestern Polytechnical University, China<br>
Gang Liu, Xi’an Jiaotong University, China<br>
Jianhua Liu, Beihang University, China<br>
Quanlin Liu, University of Science and Technology Beijing, China<br>
Xuefeng Liu, University of Science and Technology Beijing, China<br>
Yongchang Liu, Tianjin University, China<br>
Yongchang Liu, University of Science and Technology Beijing, China<br>
Xionggang Lu, ShanghaiTech University, China<br>
Haiwen Luo, University of Science and Technology Beijing, China<br>
Xuewei Lü, Chongqing University, China<br>
Jianmin Ma, University of Electronic Science and Technology of China, China<br>
Wenhui Ma, Kunming University of Science and Technology, China<br>
Baisheng Nie, China University of Mining and Technology (Beijing), China<br>
Jiahu Ouyang, Harbin Institute of Technology, China<br>
Xiaolu Pang, University of Science and Technology Beijing, China<br>
Chongchong Qi, Central South University, China<br>
Feng Qiu, Jilin University, China<br>
Xuanhui Qu, University of Science and Technology Beijing, China<br>
Ying Ren, University of Science and Technology Beijing, China<br>
Jiguo Shan, Tsinghua University, China<br>
Chengjia Shang, University of Science and Technology Beijing, China<br>
Shaoxian Song, Wuhan University of Technology, China<br>
Chunbao Sun, University of Science and Technology Beijing, China<br>
Dongping Tao, Shandong University of Technology, China<br>
Jianjun Tian, University of Science and Technology Beijing, China<br>
Chengyan Wang, University of Science and Technology Beijing, China<br>
Lei Wang, Northeastern University, China<br>
Mingyong Wang, University of Science and Technology Beijing, China<br>
Shouguo Wang, University of Science and Technology Beijing, China<br>
Tongmin Wang, Dalian University of Technology, China<br>
Xindong Wang, University of Science and Technology Beijing, China<br>
Yandong Wang, University of Science and Technology Beijing, China<br>
Guanghua Wen, Chongqing University, China<br>
Shuming Wen, Kunming University of Science and Technology, China<br>
Guanglei Wu, Qingdao University, China<br>
Shunchuan Wu, Kunming University of Science and Technology, China<br>
Xinglong Wu, Northeast Normal University, China<br>
Yuan Wu, University of Science and Technology Beijing, China<br>
Xiaoli Xi, Beijing University of Technology, China<br>
Zhiguo Xia, South China University of Technology, China<br>
Xianran Xing, University of Science and Technology Beijing, China<br>
Jian Yang, Shanghai University, China<br>
Zhigang Yang, Tsinghua University, China<br>
Shenghua Yin, University of Science and Technology Beijing, China<br>
Wanzhong Yin, Northeastern University/Fuzhou University, China<br>
Jiaguo Yu, China University of Geosciences (Wuhan), China<br>
Chao Yuan, Institute of Metal Research, Chinese Academy of Sciences, China<br>
Dawei Zhang, University of Science and Technology Beijing, China<br>
Hui Zhang, Zhejiang University, China<br>
Jianliang Zhang, University of Science and Technology Beijing, China<br>
Jinghuai Zhang, Harbin Engineering University, China<br>
Lifeng Zhang, Yanshan University, China<br>
Mei Zhang, University of Science and Technology Beijing, China<br>
Qiaobao Zhang, Xiamen University, China<br>
Xinfang Zhang, University of Science and Technology Beijing, China<br>
Yao Zhang, Southeast University, China<br>
Yong Zhang, University of Science and Technology Beijing, China<br>
Xiaozhong Zhang, Tsinghua University, China<br>
Hailei Zhao, University of Science and Technology Beijing, China<br>
Cheng Zhong, Tianjin University, China<br>
Fubao Zhou, China University of Mining and Technology, China<br>
Miaoyong Zhu, Northeastern University, China<br>
Rong Zhu, University of Science and Technology Beijing, China<br>
Linzhong Zhuang, University of Science and Technology Beijing, China<br>
Weidong Zhuang, University of Science and Technology Beijing, China<br>
Raimund Bürger, Universidad de Concepción, Chile<br>
Guocai Chai, Linköping University, Sweden<br>
Jung-Wook Cho, Pohang University of Science and Technology, Rep. of Korea<br>
Bai Cui, University of Nebraska-Lincoln, USA<br>
Qiang Du, SINTEF Industry, Norway<br>
Bharat Gwalani, Pacific Northwest National Laboratory, USA<br>
Aziz Habibi-Yangjeh, University of Mohaghegh Ardabili, Iran<br>
Jianjun Hu, University of South Carolina, USA<br>
Kevin Huang, University of South Carolina, USA<br>
Mingxin Huang, The University of Hong Kong, Hong Kong, China<br>
Yizhong Huang, Nanyang Technological University, Singapore<br>
Yuanding Huang, Helmholtz-Zentrum Geesthacht, Germany<br>
Mohammad Ismail, Universiti Malaysia Terengganu, Malaysia<br>
Youn-Bae Kang, Pohang University of Science and Technology, Rep. of Korea<br>
Hyunjung Kim, Hanyang University, Rep. of Korea<br>
Bern Klein, University of British Columbia, Canada<br>
Huijun Li, University of Wollongong, Australia<br>
Zushu Li, The University of Warwick, UK<br>
Dongsheng Liao, ArcelorMittal Dofasco Inc., Canada<br>
Junhe Lian, Aalto University, Finland<br>
Xingbo Liu, West Virginia University, USA<br>
Shigeo Maruyama, The University of Tokyo, Japan<br>
Wajira Mirihanage, The University of Manchester, UK<br>
Wangzhong Mu, KTH Royal Institute of Technology, Sweden<br>
Steffen Neumeier, Friedrich-Alexander-University Erlangen-Nürnberg (FAU), Germany<br>
Takuji Oda, Seoul National University, Rep. of Korea<br>
Joo Hyun Park, Hanyang University, Rep. of Korea<br>
Johnnes Schenk, Montanuniversität Leoben, Austria<br>
Siegfried Schmauder, University of Stuttgart, Germany<br>
Il Sohn, Yonsei University and POSTECH, Rep. of Korea<br>
Luís Marcelo Tavares, Federal University of Rio de Janeiro, Brazil<br>
Sammy Tin, Illinois Institute of Technology, USA<br>
Olena Volkova, TU Bergakademie Freiberg, Germany<br>
Chuan Wang, Swerim AB, Sweden<br>
Yunfei Xi, Queensland University of Technology, Australia<br>
Shu Yin, Tohoku University, Japan<br>
Baojun Zhao, The University of Queensland, Australia<br>
<strong>Youth Editorial Board</strong><br>
Shenxu Bao, Wuhan University of Technology, China<br>
Linjiang Chai, Chongqing University of Technology, China<br>
Ziyong Chang, University of Science and Technology Beijing, China<br>
Chong Chen, Institute of Solid State Physics, Chinese Academy of Sciences/Henan University, China<br>
Gang Chen, Harbin Institute of Technology (Weihai), China<br>
Guo Chen, Yunnan Minzu University, China<br>
Jikun Chen, University of Science and Technology Beijing, China<br>
Liangyu Chen, Jiangsu University of Science and Technology, China<br>
Luzhuo Chen, Fujian Normal University, China<br>
Xin Chen, Central South University, China<br>
Liang Chu, Hangzhou Dianzi University, China<br>
Heng Cui, University of Science and Technology Beijing, China<br>
Xinwei Cui, Zhengzhou University, China<br>
Jiushuai Deng, China University of Mining and Technology (Beijing), China<br>
Xiongbo Dong, China University of Geosciences (Wuhan), China<br>
Zhihua Dong, Chongqing University, China<br>
Jian Du, Dalian Polytechnic University, China<br>
Yunchen Du, Harbin Institute of Technology, China<br>
Zhaoxin Du, Inner Mongolia University of Technology, China<br>
Bo Feng, Jiangxi University of Science and Technology, China<br>
Huadong Fu, University of Science and Technology Beijing, China<br>
Yafeng Fu, Ansteel Beijing Research Institute Co., Ltd., China<br>
Min Gan, Central South University, China<br>
Enyu Guo, Dalian University of Technology, China<br>
Lei Guo, University of Science and Technology Beijing, China<br>
Lijie Guo, BGRIMM Technology Group, China<br>
Mingxing Guo, University of Science and Technology Beijing, China<br>
Ruitang Guo, Shanghai University of Electrc Power, China<br>
Xiaofei Guo, Shanghai University, China<br>
Zhengqi Guo, Central South University, China<br>
Guihong Han, Zhengzhou University, China<br>
Haisheng Han, Central South University, China<br>
Yuanfei Han, Shanghai Jiao Tong University, China<br>
Fei He, University of Science and Technology Beijing, China<br>
Hongtu He, Southwest University of Science and Technology, China<br>
Jiarui He, Southeast University, China<br>
Zhangxing He, North China University of Science and Technology, China<br>
Zhensheng Hong, Fujian Normal University, China<br>
Guoliang Hou, Lanzhou Institute of Chemical Physics, Chinese Academy of Sciences, China<br>
Haijiang Hu, Wuhan University of Science and Technology, China<br>
Jiugang Hu, Central South University, China<br>
Jun Hu, Northeastern University, China<br>
Qiaodan Hu, Shanghai Jiao Tong University, China<br>
Lei Huang, Guangzhou University, China<br>
Liang Huang, Huazhong University of Science and Technology, China<br>
Feifei Jia, Wuhan University of Technology, China<br>
Yanmin Jia, Xi’an University of Posts and Telecommunications, China<br>
Zirui Jia, Qingdao University, China<br>
Fulin Jiang, Hunan University, China<br>
Haiqiang Jiang, Northeastern University, China<br>
Wenming Jiang, Huazhong University of Science and Technology, China<br>
Hongbo Ju, Jiangsu University of Science and Technology, China/University of Coimbra, Portugal<br>
Huijun Kang, Dalian University of Technology, China<br>
Jue Kou, University of Science and Technology Beijing, China<br>
Mingyin Kou, University of Science and Technology Beijing, China<br>
Wen Lei, Wuhan University of Science and Technology, China<br>
Yun Lei, Kunming University of Science and Technology, China<br>
Chuanchang Li, Changsha University of Science and Technology, China<br>
Guangshi Li, Shanghai University, China<br>
Hongsen Li, Qingdao University, China<br>
Jie Li, Henan University, China<br>
Jingwei Li, Hefei University of Technology, China<br>
Jun Li, Shanghai Jiao Tong University, China<br>
Kejiang Li, University of Science and Technology Beijing, China<br>
Meng Li, China University of Mining and Technology, China<br>
Peng Li, University of Science and Technology Beijing, China<br>
Wenjuan Li, GRINM Resources and Environment Technology Co., Ltd., China<br>
Xiaoshuang Li, Shaoxing University, China<br>
Yan Li, University of Science and Technology Beijing, China<br>
Feng Liang, Kunming University of Science and Technology, China<br>
Bo Lin, Xi’an Jiaotong University, China<br>
Kun Lin, University of Science and Technology Beijing, China<br>
Tao Ling, Tianjin University, China<br>
Chao Liu, Jiangxi University of Science and Technology, China<br>
Chong Liu, Sichuan University, China<br>
Guicheng Liu, North China Electric Power University, China<br>
Huiqiao Liu, Xinyang Normal University, China<br>
Lang Liu, Xi’an University of Science and Technology, China<br>
Wenwu Liu, Lanzhou University of Technology, China<br>
Xianfeng Liu, Chongqing University, China<br>
Xiang Liu, China Three Gorges University, China<br>
Xiaoguang Liu, University of Science and Technology Beijing, China<br>
Xiaoming Liu, University of Science and Technology Beijing, China<br>
Xuan Liu, University of Science and Technology Beijing, China<br>
Zhengjian Liu, University of Science and Technology Beijing, China<br>
Zhong Liu, Qinghai Institute of Salt Lakes, Chiness Academy of Science, China<br>
Hongming Long, Anhui University of Technology, China<br>
Mujun Long, Chongqing Univeristy, China<br>
Zhichao Lou, Nanjing Forestry University, China<br>
Qipeng Lu, University of Science and Technology Beijing, China<br>
Wei Lu, Tongji University, China<br>
Xiaopeng Lu, Northeastern University, China<br>
Xin Lu, University of Science and Technology Beijing, China<br>
Hualiang Lü, Fudan University, China<br>
Hong Luo, University of Science and Technology Beiijng, China<br>
Qun Luo, Shanghai University, China<br>
Baozhong Ma, University of Science and Technology Beijing, China<br>
Lingwei Ma, University of Science and Technology Beijing, China<br>
Xianfeng Ma, Sun Yat-sen University, China<br>
Peiyuan Ni, Northeastern University, China<br>
Jing Ouyang, Central South University, China<br>
Weijun Peng, Zhengzhou University, China<br>
Xiaosi Qi, Guizhou University, China<br>
Junwei Qiao, Taiyuan University of Technology, China<br>
Yanxin Qiao, Jiangsu University of Science and Technology, China<br>
Feng Rao, Fuzhou University, China<br>
Mingjun Rao, Central South University, China<br>
Chengbin Shi, University of Science and Technology Beijing, China<br>
Xilin Shi, Institute of Rock and Soil Mechanics, Chinese Academy of Sciences, Wuhan, China<br>
Zhangzhi Shi, University of Science and Technology Beijing, China<br>
Jiancheng Shu, Southwest University of Science and Technology, China<br>
Ruiwen Shu, Anhui University of Science and Technology, China<br>
Dazhao Song, University of Science and Technology Beijing, China<br>
Jianxun Song, Zhengzhou University, China<br>
Weili Song, Beijing Institute of Technology, China<br>
Bei Sun, Central South University, China<br>
Binhan Sun, East China University of Science and Technology, China<br>
Hui Sun, Shandong University, China<br>
Jiapeng Sun, Hohai University, China<br>
Jie Sun, Northeastern University, China<br>
Weifu Sun, Beijing Institute of Technology, China<br>
Yongsheng Sun, Northeastern University, China<br>
Zhiming Sun, China University of Mining and Technology (Beijing), China<br>
Jue Tang, Northeastern University, China<br>
Yuan Tang, Wuhan Institute of Technology, China<br>
Zhidong Tang, Northeastern University, China<br>
Hui Tong, Central South University, China<br>
Enhui Wang, University of Science and Technology Beijing, China<br>
Guangwei Wang, University of Science and Technology Beijing, China<br>
Jiexi Wang, Central South University, China<br>
Leiming Wang, University of Science and Technology Beijing, China<br>
Qi Wang, University of Science and Technology Beijing, China<br>
Shaofeng Wang, Central South University, China<br>
Xianzong Wang, Northwestern Polytechnical University, China<br>
Yong Wang, University of Science and Technology Beijing, China<br>
Zegao Wang, Sichuan University, China<br>
Zhanjun Wang, Northeastern University, China<br>
Zhe Wang, University of Science and Technology Beijing, China<br>
Zhenqiang Wang, Harbin Engineering University, China<br>
Zhi Wang, South China University of Technology, China<br>
Fei Weng, Shandong University, China<br>
Wei Weng, Fuzhou University, China<br>
Di Wu, Institute of Metal Research, Chinese Academy of Sciences, China<br>
Fan Wu, Nanjing University of Science and Technology, China<br>
Honghui Wu, University of Science and Technology Beijing, China<br>
Hongjing Wu, Northwestern Polytechnical University, China<br>
Jiangyu Wu, China University of Mining and Technology, China<br>
Zheng Wu, Xi’an Polytechnic University, China<br>
Chen Xia, Hubei University, China<br>
Kaizong Xia, Institute of Rock and Soil Mechanics, Chinese Academy of Sciences, Wuhan, China<br>
Beibei Xiao, Jiangsu University of Science and Technology, China<br>
Wei Xiao, Xi’an University of Architecture and Technology, China<br>
Wei Xiao, Wuhan University, China<br>
Wei Xiao, Yangtze University, China<br>
Yanfei Xiao, Jiangxi University of Science and Technology, China<br>
Zhu Xiao, Central South University, China<br>
Xiubo Xie, Yantai University, China<br>
Zhenjia Xie, University of Science and Technology Beijing, China<br>
Zhihui Xie, China West Normal University, China<br>
Baolin Xing, Henan Polytechnic University, China<br>
Fuyuan Xu, Tongji University, China<br>
Lei Xu, Kunming University of Science and Technology, China<br>
Peng Xue, Institute of Metal Research, Chinese Academy of Sciences, China<br>
Chao Yan, Jiangsu University of Science and Technology, China<br>
Yongde Yan, Harbin Engineering University, China<br>
Fan Yang, Shanghai Jiao Tong University, China<br>
Qingshan Yang, Chongqing University of Science and Technology, China<br>
Wenshu Yang, Harbin Institute of Technology, China<br>
Xiao Yang, Westlake University, China<br>
Yafeng Yang, Institute of Process Engineering, Chinese Academy of Sciences, China<br>
Yan Yang, Chongqing University, China<br>
Xinyu Ye, National Rare Earth Functional Materia Innovation Center, China<br>
Lingyun Yi, Central South University, China<br>
Huiqin Yin, Shanghai Institute of Applied Physics, Chinese Academy of Sciences, China<br>
Qian Yin, China University of Mining and Technology, China<br>
Hui Yu, Hebei University of Technology, China<br>
Wen Yu, Jiangxi University of Science and Technology, China<br>
Wenbo Yu, Beijing Jiaotong University, China<br>
Xin Yu, University of Jinan, China<br>
Kunjie Yuan, University of Science and Technology Beijing, China<br>
Shuai Yuan, Northeastern University, China<br>
Chun Zhan, University of Science and Technology Beijing, China<br>
Ang Zhang, Chongqing University, China<br>
Baicheng Zhang, University of Science and Technology Beijing, China<br>
Binbin Zhang, Institute of Oceanology, Chinese Academy of Sciences, China<br>
Bo Zhang, Northeastern University, China<br>
Bowei Zhang, University of Science and Technology Beijing, China<br>
Cunsheng Zhang, Shandong University, China<br>
Hua Zhang, Yantai University, China<br>
Jialiang Zhang, University of Science and Technology Beijing, China<br>
Junfei Zhang, Hebei University of Technology, China<br>
Junhao Zhang, Jiangsu University of Science and Technology, China<br>
Li Zhang, Shaanxi University of Science and Technology, China<br>
Liang Zhang, Shanghai Jiao Tong University, China<br>
Lin Zhang, University of Science and Technology Beijing, China<br>
Liuting Zhang, Jiangsu University of Science and Technology, China<br>
Ningning Zhang, Xi’an University of Science and Technology, China<br>
Shuye Zhang, Harbin Institute of Technology, China<br>
Tao Zhang, Jiangsu University, China<br>
Wenli Zhang, Guangdong University of Technology, China<br>
Xianguang Zhang, University of Science and Technology Beijing, China<br>
Xiaolong Zhang, Northeastern University, China<br>
Yu Zhang, Harbin Institute of Technology, China<br>
Zengqi Zhang, University of Science and Technology Beijing, China<br>
Zheng Zhang, University of Science and Technology Beijing, China<br>
Zongliang Zhang, Central South University, China<br>
Qing Zhao, Northeastern University, China<br>
Sikai Zhao, Northeastern University, China<br>
Tianliang Zhao, Wuhan University of Science and Technology, China<br>
Zhanyong Zhao, North University of China, China<br>
Zhenhuan Zhao, Xidian University, China<br>
Lejun Zhou, Central South University, China<br>
Nan Zhou, China University of Mining and Technology, China<br>
Yingtang Zhou, Zhejiang Ocean University, China<br>
Chun Zhu, Hohai University, China<br>
Jinliang Zhu, Guangxi University, China<br>
Ji Zou, Wuhan University of Technology, China/University of Birmingham, UK<br>
Gomaa Abdelgawad Mohammed Ali, Al–Azhar University, Egypt<br>
Yubin Cao, University College London, UK<br>
Zhiyuan Chen, Flemish Institute for Technological Research, Belgium<br>
Keivan Davami, The University of Alabama, USA<br>
Sujun Guan, Toyo University, Japan<br>
Grégory Guisbiers, University of Arkansas at Little Rock, USA<br>
Baoqi Guo, Kyoto University, Japan<br>
Tong Han, KTH Royal Institute of Technology, Sweden<br>
Jaker Hossain, University of Rajshahi, Bangladesh<br>
I.M. Saman K. Ilankoon, Monash University Malaysia Campus, Malaysia<br>
Zengbao Jiao, The Hong Kong Polytechnic University, Hong Kong, China<br>
Nan Kang, Arts et Metiers Paristech, France<br>
Georgy Lazorenko, Rostov State Transport University, Russia<br>
Yikai Liu, University of Padova, Italy<br>
Yu Liu, University of Copenhagen, Denmark<br>
Xin Lu, Tohoku University, Japan<br>
Xiaodong Ma, The University of Queensland, Australia<br>
Yan Ma, Max-Planck-Institut für Eisenforschung, Germany<br>
Metwally Mohammed Metwally Madkour, Arish University, Egypt<br>
Jianfeng Mao, University of Wollongong, Australia<br>
Chetan Nikhare, The Pennsylvania State University, USA<br>
Monday Uchenna Okoronkwo, Missouri University of Science and Technology, USA<br>
Supareak Praserthdam, Chulalongkorn University, Thailand<br>
Md Khan Sobayel Bin Rafiq, Universiti Kebangsaan Malaysia, Malaysia<br>
Pitcheri Rosaiah, Yeungnam University, Rep. of Korea<br>
Anantharaj Sengeni, Waseda University, Japan<br>
Peiliang Shen, The Hong Kong Polytechnic University, Hong Kong, China<br>
Hainan Sun, Korea Advanced Institute of Science and Technology, Rep. of Korea<br>
Jianwei Tian, Technical University of Denmark, Denmark<br>
Dmitry Valeev, Russian Academy of Sciences, Russia<br>
Jun Wang, Deakin University, Australia<br>
Tianhao Wang, Pacific Northwest National Laboratory, USA<br>
Guang Xu, Missouri University of Science and Technology, USA<br>
Jijian Xu, University of Maryland, USA<br>
Zhiming Yan, University of Warwick, UK<br>
Erol Yılmaz, Recep Tayyip Erdoğan University, Turkey<br>
Wei Zhai, National University of Singapore, Singapore<br>
Kun Zheng, AGH University of Science and Technology, Poland<br>
<strong>Editors</strong><br>
Donghua Huang, Yan Du, Peixian Chen, Lu Pan, Liping Yang, Xian Jia</p>",

            'faculty_id' => $faculty->id,
            'editor_id' => $editor->id,
            'cover_photo' => 'public/' . Storage::disk('public')->putFileAs('cover-photos', $imagePath, $fileName),
        ]);


    }
}