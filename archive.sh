#!/bin/bash
# .envにコミットIDを記述。
# DIFF_1 => 古いコミット
# DIFF_2 => 最新のコミット
# BRANCH=> 対象のブランチ
# EXCLUDE_FILES => 出力から除外するファイル、複数可
# 例
# EXCLUDE_FILES=.gitignore,archive.sh
# bash archive.sh で動かす
# 差分のあるファイルがzipで出力される => changed_files.zip

# スクリプトのディレクトリを取得
SCRIPT_DIR=$(cd "$(dirname "$0")" && pwd)

# .env ファイルのパスを指定
env_file="$SCRIPT_DIR/.env"

# .env ファイルを読み込む
if [ -f "$env_file" ]; then
    # ファイルが存在する場合、環境変数を読み込む
    source "$env_file"
else
    # ファイルが存在しない場合、エラーメッセージを表示
    echo "Error: .env file not found in $SCRIPT_DIR."
    exit 1
fi

# 出力ファイル名を指定
output_file="changed_files.zip"

# 除外ファイルを格納する配列を初期化
exclude_files=()

# EXCLUDE_FILES 環境変数が空でない場合のみ処理を行う
if [ -n "$EXCLUDE_FILES" ]; then
    # EXCLUDE_FILES 環境変数をカンマで分割し、配列に格納
    IFS=',' read -ra exclude_files <<< "$EXCLUDE_FILES"
fi

# git diff で変更のあるファイルを取得し、アーカイブする
# 除外するファイルを一つずつ指定
cmd=("git diff --name-only --diff-filter=d $DIFF_1 $DIFF_2")
for exclude in "${exclude_files[@]}"; do
    cmd+=(":!$exclude")
done

# コマンドを実行
eval "${cmd[@]}" | xargs git archive "$BRANCH" --format=zip -o "$output_file" --
