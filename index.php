<?php

//    ���·��(����URL��ͬ��Ӧ��ͬ��ҳ��)

//	header('content-type:text/html;charset=utf-8');
	// include('./header.html');
	// echo " <div>��ҳ����</div> ";
	// include('./footer.html');
 
 // include �ڵ�ǰPHPҳ���ڲ�Ƕ��һ����ҳ��
 
 // �����ܹ�ͨ��URL���ֳ��û�������Ǹ�ҳ��

// Ĭ��Ŀ¼����
$dir = 'main';
//Ĭ���ļ�����
$filename = 'index';

//����URL��·��
 if(array_key_exists('PATH_INFO',$_SERVER)){
 //PATH_INFO���Դ���
 //��ȡ����·��
 $path = $_SERVER['PATH_INFO'];//  /main/index
//ȥ����һ��б��
$str = substr($path,1); //  /main/index
//�ַ����ָ�,��js ��split ��������
 $ret = explode('/',$str);
if(count($ret) == 2){
    //·��������
    $dir = $ret[0];//����Ŀ¼
    $filename = $ret[1];//�����ļ�����
}else{
    //�������ȫ����ת����¼ҳ��
    $filename = 'login';
}

 }

//Ƕ����ҳ��
include('./views/'.$dir.'/'.$filename.'.html')


//
// // include('./views/main/index.html');
//
//$path = $_SERVER['PATH_INFO'];
//echo $path;
//
//include('./views'.$path.'.html');

 ?>

