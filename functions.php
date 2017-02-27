<?php
/**
    * ��֤�ֻ����Ƿ���ȷ
    * ��֧���й���½11λ�ֻ���
    * �ƶ���134��135��136��137��138��139��150��151��152��157��158��159��182��183��184��187��188��178(4G)��147(������)��
    * ��ͨ��130��131��132��155��156��185��186��176(4G)��145(������)��
    * ���ţ�133��153��180��181��189 ��177(4G)��
    * ����ͨ�ţ�1349
    * ������Ӫ�̣�170
    * @author lan
    * @param string $mobile
    * @return bool
    */
    function isMobile($mobile='') {
        return preg_match('#^13[\d]{9}$|^14[5,7]{1}\d{8}$|^15[^4]{1}\d{8}$|^17[0,6,7,8]{1}\d{8}$|^18[\d]{9}$#', $mobile) ? true : false;
    }
    /**
    * ��֤�����Ƿ���ȷ
    * ������6-16λ��Сд��ĸ�����ֺ��»������
    * @author lan
    * @param string $password
    * @return bool
    */
    function isPassword($password=''){
        return preg_match("/^[0-9a-zA-Z_]{6,16}$/", $password) ? true : false;
    }
    /**
    * ��֤�����Ƿ���ȷ
    * @author lan
    * @param string $email
    * @return bool
    */
    function isEmail($email=''){
        return preg_match("/^([0-9A-Za-z\\-_\\.]+)@([0-9a-z]+\\.[a-z]{2,3}(\\.[a-z]{2})?)$/i", $email) ? true : false;
    }
    /**
    * ��֤�û����Ƿ���ȷ
    * �û�����6-24λ��ĸ��������ɣ���λ����������
    * @param string $username
    * @return bool
    */
    function isUserName($username=''){
        return preg_match("/^[a-zA-Z]{1}[0-9a-zA-Z]{5,23}$/", $username) ? true : false;
    }
    /**
    * ��֤���֤�����ʽ�Ƿ���ȷ
    * ��֧�ֶ������֤
    * @author chiopin
    * @param string $idcard ���֤����
    * @return boolean
    */
    function isIdCard($idcard=''){
        // ֻ����18λ
        if(strlen($idcard)!=18){
            return false;
        }
        
        $vCity = array(
        '11','12','13','14','15','21','22',
        '23','31','32','33','34','35','36',
        '37','41','42','43','44','45','46',
        '50','51','52','53','54','61','62',
        '63','64','65','71','81','82','91'
        );
        
        if (!preg_match('/^([\d]{17}[xX\d]|[\d]{15})$/', $idcard)) return false;
        
        if (!in_array(substr($idcard, 0, 2), $vCity)) return false;
        
        // ȡ��������
        $idcard_base = substr($idcard, 0, 17);
        
        // ȡ��У����
        $verify_code = substr($idcard, 17, 1);
        
        // ��Ȩ����
        $factor = array(7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2);
        
        // У�����Ӧֵ
        $verify_code_list = array('1', '0', 'X', '9', '8', '7', '6', '5', '4', '3', '2');
        
        // ����ǰ17λ����У����
        $total = 0;
        for($i=0; $i<17; $i++){
            $total += substr($idcard_base, $i, 1)*$factor[$i];
        }
        
        // ȡģ
        $mod = $total % 11;
        
        // �Ƚ�У����
        if($verify_code == $verify_code_list[$mod]){
            return true;
        }else{
            return false;
        }
    }