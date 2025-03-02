# app.py
from flask import Flask, jsonify
import subprocess

app = Flask(__name__)

@app.route('/run-python')
def run_python_script():
    # Spustíme Python skript a získáme výstup
    result = subprocess.run(['python3', 'your_script.py'], capture_output=True, text=True)
    return jsonify({'output': result.stdout})

if __name__ == '__main__':
    app.run(debug=True)
