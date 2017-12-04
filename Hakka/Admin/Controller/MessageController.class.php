<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Page;

/**
 * 用户留言控制器
 */
class MessageController extends BaseController{

    /**
     * 留言列表
     */
    public function index(){
        $this->assign('c','b');
        $this->display();
    }


    /**
     * 数据
     */
    public function lists(){
        $p = I();
        $like = $p['search']['value'];
        if($like){
            $start = $p['start'];
            $length = $p['length'];
            $message = M("message");
            $where['name'] = array('like','%'.$like.'%');
            $counts = $message->count();
            $count = $message->where($where)->count();
            $info = $message->where($where)->limit($start,$length)->select();
            foreach($info as $k=>$v){
                $info[$k]['time'] = date("Y-m-d H:i",$v['time']);
                if($v['status'] == '1'){
                    $info[$k]['status'] = '是';
                }else{
                    $info[$k]['status'] = '否';
                }
                if($v['source'] == '0'){
                    $info[$k]['source'] = "楼书";
                }
            }
            $result = array_values($info);
            echo json_encode(array(
                'draw' => $p['draw'],
                'recordsTotal' => $counts,
                'recordsFiltered' => $count,
                'data' => $result,
            ));
        }else {
            $start = $p['start'];
            $length = $p['length'];
            $message = M("message");
            $count = $message->count();
            $info = $message->limit($start,$length)->select();
            foreach($info as $k=>$v){
                $info[$k]['time'] = date("Y-m-d H:i",$v['time']);
                if($v['status'] == '1'){
                    $info[$k]['status'] = '是';
                }else{
                    $info[$k]['status'] = '否';
                }
                if($v['source'] == '0'){
                    $info[$k]['source'] = "楼书";
                }else{
                    $room = M("room");
                    $das = $room->where(array("id"=>$v['source']))->find();
                    if($das){
                        $info[$k]['source'] = $das['tiele'].$das['few']."层"."面积".$das['area']."平米";
                    }else{
                        $info[$k]['source'] = "";
                    }
                }
            }
            $result = array_values($info);
            echo json_encode(array(
                'draw' => $p['draw'],
                'recordsTotal' => $count,
                'recordsFiltered' => $count,
                'data' => $result,
            ));
        }
    }

    /*
     * 删除
     */
    public function dete(){
        $id = I('get.');
        $where['id'] = $id['id'];
        $message = M("message");
        $data = $message->where($where)->delete();
        if (!$data) {
            $this->error('删除失败');exit;
        }
        $this->success('操作成功',U('Admin/Message/index'));exit;
    }


    /*
     * 导出
     */
    public function derivation(){
        $message = M("message");
        $data = $message->select();
        foreach($data as $k=>$v){
            $data[$k]['time'] = date("Y-m-d H:i",$v['time']);
        }
        $arr = array(
            "id"=>'编号',
            "phone"=>'联系方式',
            "name"=>'联系人',
            "source"=>'来源',
            "reservation"=>'预约房源',
            "message"=>'留言',
            "time"=>'留言时间'
        );
        array_unshift($data,$arr);
        //导入PHPExcel类库，因为PHPExcel没有用命名空间，只能inport导入
        import("Org.Util.PHPExcel");
        import("Org.Util.PHPExcel.IOFactory");
        //创建PHPExcel对象，注意，不能少了\
        $PHPExcel = new \PHPExcel();

        foreach($data as $k => $v){
            $num=$k+1;
            $PHPExcel->setActiveSheetIndex(0)
                //Excel的第A列，uid是你查出数组的键值，下面以此类推
                ->setCellValue('A'.$num, $v['id'])
                ->setCellValue('B'.$num, ' '. $v['phone'])
                ->setCellValue('C'.$num, $v['name'])
                ->setCellValue('D'.$num, ' '. $v['source'])
                ->setCellValue('E'.$num, $v['reservation'])
                ->setCellValue('F'.$num, $v['message'])
                ->setCellValue('G'.$num, $v['time']);
        }
        $PHPExcel->getActiveSheet()->setTitle('User');
        $PHPExcel->setActiveSheetIndex(0);
        //保护数据源
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="'."客户留言".time().rand(1000,9999).'.xls"');
        header('Cache-Control: max-age=0');
        $objWriter = \PHPExcel_IOFactory::createWriter($PHPExcel, 'Excel5');
        $objWriter->save('php://output');
        exit;
    }

    /*
     * 留言跟进
     */
    public function edit(){
        if(IS_POST) {
            $data = I();
            //修改留言状态
            $where['id'] = $data['mess_id'];
            $message = M("message");
            $save['status'] = 1;
            $message->where($where)->save($save);
            //写入留言回复
            $answer = M("answer");
            $data['time'] = time();
            $edit = $answer->add($data);
            if (!$edit) {
                $this->error('回复失败');exit;
            }
            echo "<script>window.parent.location.href='".C("HTML_URL")."/Admin/Message/index.html'</script>";
        }
        $data = I();
        $where['id'] = $data['id'];
        //客户留言
        $message = M("message");
        $info = $message->where($where)->find();
        $info['time'] = date("Y-m-d H:i",$info['time']);
        //回复
        $answer = M("answer");
        $wherea['mess_id'] = $data['id'];
        $infos = $answer->where($wherea)->select();
        foreach($infos as $k=>$v){
            $infos[$k]['time'] = date("Y-m-d H:i",$v['time']);
        }

        $this->assign('info',$info);
        $this->assign('c','b');
        $this->assign('infos',$infos);
        $this->display();
    }

    /*
     * 删除留言跟进
     */
    public function deteme(){
        $id = I('get.');
        $answer = M("answer");
        $where['id'] = $id['id'];
        $data = $answer->where($where)->delete();
        if (!$data) {
            $this->error('删除失败');exit;
        }
        $this->success('删除成功');exit;
    }
}