<?php
	if(!defined('__ZBXE__')) return; // 1.5~7.x ���� ����.
	if(Context::get('module')=='admin' || $called_position != 'before_display_content') return; // ������ ������ ���� ����. || ȭ�鿡 ���÷��� �Ҷ��� ����
	// License: Creative Commons License Attribution-ShareAlike 2.0 Korea (������ǥ��-�������Ǻ������ 2.0 ���ѹα�) http://creativecommons.org/licenses/by-sa/2.0/kr/
	// Author: Űū����

	$logged_info = Context::get('logged_info');

	if($addon_info->status == 'N' && $logged_info->is_admin){ // �ֵ�� ���༳���̸鼭 �����ڷα����϶� �۵�.
		Context::set("admin_bar", "false");
	};
	
	return;// �ֵ�� ����.
?>