# Usa a imagem oficial do Node.js v21
FROM node:21

# Define o diretório de trabalho no container
WORKDIR /app

# Copia o package.json e instala as dependências
COPY package.json ./
RUN npm install

# Copia o restante do projeto
COPY . .

# Exponha a porta padrão do React
EXPOSE 3000

# Comando para rodar o frontend
CMD ["npm", "start"]
