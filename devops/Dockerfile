FROM node:12-alpine

ENV HOST 0.0.0.0
ENV NPM_CONFIG_PREFIX=/home/node/.npm-global
ENV PATH=$PATH:/home/node/.npm-global/bin
EXPOSE 3000

RUN mkdir /app && chown -R node:node /app
WORKDIR /app
USER node
COPY --chown=node:node package.json yarn.lock ./
RUN yarn install && \
 yarn cache clean -f
COPY --chown=node:node . .

CMD [ "yarn", "start" ]



