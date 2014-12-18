<?php
class MemberDataTask extends AppShell {
    
    // 使用するモデル
    public $uses = 'Member';
    
    /**
     * タスクの入り口
     */
    public function execute() {
        // ご挨拶を画面に表示
        $this->out('Hello!!!!');
        
        // 区切り線を表示
        $this->hr();
        
        // addArgument()で指定した引数を表示
        debug($this->args);
        
        // addOption()で指定したオプションを表示
        debug($this->params);
        
        // 実際のバッチ処理
        $data = $this->Member->find('all');
        debug($data);
    }
    
    /**
     * ヘルプ内容とパラメータ・オプション群の定義
     * @return ConsoleOptionParser
     */
    public function getOptionParser() {
        // ConsoleOptionParserインスタンスの初期化
        $parser = parent::getOptionParser();
        
        // ヘルプの先頭に来るこのタスクの説明
        $parser->description(
                "This is MemberData Task's help."
        );
        
        // タスクの引数の定義
        $parser->addArgument('FileName', array(
            'help' => 'Output file name.',
            // 引数は必須入力か
            'required' => true,
        ));
        
        // タスクオプションの定義
        $parser->addOption('connection', array(
           'help'  => 'Database connection',
            // オプションの短縮名
            'short' => 'c',
            // 未入力の場合の初期値
            'default' => 'default',
            // オプション値の選択肢
            'choices' => array('default', 'test'),
        ));
        
        return $parser;
    }
}