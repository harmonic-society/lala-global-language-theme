/**
 * 注目記事の部分一致検索コントロール用スクリプト（Customizer管理画面側）
 *
 * テキスト入力欄でdatalist候補を選ぶ／タイトルを入力すると、
 * 対応する投稿IDをhidden入力に反映し、Customizerの設定値を更新する。
 */
( function () {
    'use strict';

    function syncControl( wrapper ) {
        var textInput = wrapper.querySelector( '.lala-post-search-input' );
        var idInput   = wrapper.querySelector( '.lala-post-search-id' );
        var datalist  = textInput ? document.getElementById( textInput.getAttribute( 'list' ) ) : null;
        var status    = wrapper.querySelector( '.lala-post-search-status' );

        if ( ! textInput || ! idInput || ! datalist ) {
            return;
        }

        function resolveId() {
            var typed   = textInput.value.trim();
            var options = datalist.querySelectorAll( 'option' );
            var matchedId = '';

            // 入力タイトルと完全一致するoptionのdata-idを採用
            for ( var i = 0; i < options.length; i++ ) {
                if ( options[ i ].value === typed ) {
                    matchedId = options[ i ].getAttribute( 'data-id' ) || '';
                    break;
                }
            }

            // 空欄なら未選択（ID=0扱い）
            if ( typed === '' ) {
                matchedId = '';
            }

            idInput.value = matchedId;

            // Customizerの設定値を更新（jQuery change を発火）
            if ( window.jQuery ) {
                window.jQuery( idInput ).trigger( 'change' );
            } else {
                idInput.dispatchEvent( new Event( 'change', { bubbles: true } ) );
            }

            // ステータス表示更新
            if ( status ) {
                status.textContent = matchedId ? ( '選択中: ID ' + matchedId ) : '未選択';
            }
        }

        textInput.addEventListener( 'change', resolveId );
        textInput.addEventListener( 'input', resolveId );
    }

    function init() {
        var wrappers = document.querySelectorAll( '.customize-control-lala_post_search' );
        for ( var i = 0; i < wrappers.length; i++ ) {
            syncControl( wrappers[ i ] );
        }
    }

    if ( document.readyState === 'loading' ) {
        document.addEventListener( 'DOMContentLoaded', init );
    } else {
        init();
    }

    // Customizerのコントロールが後から描画される場合に備えて、少し遅延しても再初期化
    if ( window.wp && window.wp.customize && window.wp.customize.bind ) {
        window.wp.customize.bind( 'ready', init );
    }
} )();
