<?php
App::uses('AppShell', 'Console/Command');

class DailyShell extends AppShell {
    
    // 利用可能なサブコマンド(タスク)の定義
    public $tasks = array('MemberData');
    
    /**
     * ヘルプ内容とパラメータ・オプション群の定義
     * @return ConsoleOptionParser
     */
    public function getOptionParser() {
        // ConsoleOptionParser
        $parser = parent::getOptionParser();
        
        // ヘルプの先頭に表示される、このシェルの説明
        $parser->description(
                'This is DailyShell\'s help.'
        );
        
        // サブコマンドの説明・オプションの定義
        $parser->addSubcommand('MemberData', array(
            'help' => 'Backup Members data.',
            // サブコマンドのパラメータもここで取得
            'parser' => $this->MemberData->getOptionParser()
        ));
        
        return $parser;
    }
}